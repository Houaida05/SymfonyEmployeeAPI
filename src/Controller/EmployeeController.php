<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use App\Repository\EmployeeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Exception\NotValidCurrentPageException;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use OpenApi\Annotations as OA;


class EmployeeController extends AbstractFOSRestController
{
    private $serializer;
    private $employeeRepository;
    private $entityManager;
    private $validator;

    public function __construct(SerializerInterface    $serializer,
                                EmployeeRepository     $employeeRepository,
                                EntityManagerInterface $entityManager,
                                ValidatorInterface     $validator)
    {
        $this->employeeRepository = $employeeRepository;
        $this->serializer = $serializer;
        $this->entityManager = $entityManager;
        $this->validator = $validator;
    }

    /**
     * @OA\Response(
     *     response=200,
     *     description="Returns the rewards of an user")
     * @Rest\Get(
     *     path="/api/employees/{id}",
     *     name="employee_show",
     *     requirements={"id"="\d+"}
     *     )
     */
    public function showAction(string $id)
    {
        $employee = $this->employeeRepository->find($id);
        if (!$employee) {
            return $this->handleView($this->view(
                [
                    'status' => 'Record Not Found',
                ], Response::HTTP_NOT_FOUND
            ));
        } else
            return $this->view($employee);

    }

    /**
     * @Rest\Get(
     *     path="/api/employees",
     *     name="employee_list",
     *     )
     */
    public function listAction(Request $request)
    {
        /*  $page = $request->query->get('page', 1);
          $qb = $this->employeeRepository->findAllPage();
          $pagerAdapter = new QueryAdapter($qb);
          $pager = new Pagerfanta($pagerAdapter);
          $pager->setMaxPerPage(2);
          $pager->setCurrentPage($page);*/
        $limit = $request->query->getInt('limit', 4);
        $page = $request->query->getInt('page', 1);
        $sorting = $request->query->get('sorting', array());
        $filter = $request->query->get('filter','');
        $employees = $this->employeeRepository->findAllPaginated($filter,$limit, $page, $sorting);
        //return $this->view($employees);
        //$employees = $this->employeeRepository->findAll();
        if (!$employees) {
            return $this->handleView($this->view(
                [
                    'status' => 'Not Records Found',
                ], Response::HTTP_NOT_FOUND
            ));
        } else
            return $this->view($employees);
    }
    /*
    $employees=$this->employeeRepository->findAll();
    $pagination = $this->paginator->paginate($employees, $request->get('page', 1),
    $request->query->getInt('limit', 1));
    $view = $this->view($pagination);
    return $view;*/

    /**
     * @Rest\Post(
     *     path="/api/employees",
     *     name="employee_create",
     *     )
     */
    public function createAction(Request $request): Response
    {

        $form = $this->createForm(EmployeeType::class, new Employee());
        $form->submit($request->request->all());
        if (false === $form->isValid()) {
            return $this->handleView(
                $this->view($form)
            );
        }
        $this->entityManager->persist($form->getData());
        $this->entityManager->flush();

        return $this->handleView($this->view(
            [
                'status' => 'ok',
            ], Response::HTTP_CREATED
        ));
    }


    /**
     * @Rest\Put(
     *     path="/api/employees/{id}",
     *     name="employee_update",
     *     requirements={"id"="\d+"}
     *     )
     * */
    public function putAction(Request $request, string $id)
    {
        $existingEmployee = $this->employeeRepository->find($id);

        $form = $this->createForm(EmployeeType::class, $existingEmployee);

        $form->submit($request->request->all());

        if (false === $form->isValid()) {
            return $this->view($form);
        }

        $this->entityManager->flush();

        return $this->view(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @Rest\Delete(
     *     path="/api/employees/{id}",
     *     name="employee_delete",
     *     requirements={"id"="\d+"}
     *     )
     * */
    public function deleteAction(string $id)
    {
        $employee = $this->employeeRepository->find($id);
        if (!$employee) {
            return $this->handleView($this->view(
                [
                    'status' => 'Record Not Found',
                ], Response::HTTP_NOT_FOUND
            ));
        } else {
            $this->entityManager->remove($employee);
            $this->entityManager->flush();

            return $this->handleView($this->view(
                [
                    'status' => 'Deleted',
                ], Response::HTTP_OK
            ));
        }
    }

}