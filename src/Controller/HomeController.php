<?php

namespace App\Controller;

use App\Entity\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $a = 97;
        $b = $a + 1;
        $imageName = \chr($b + 1);

        $project = new Project();
        $project->setName("I can't find a way to debug this !");

        // Code which alters project name
        // ....

        if (null === $project->getName()) {
            $project->setName('Here it is.');
            $imageName = \chr($b + 2);
        }

        // $this->doSomethingRecursive(1000);

        return $this->render('home.html.twig', array('project' => $project, 'image' => "$imageName.gif"));
    }

    private function doSomethingRecursive($level): void {
        if ($level >= 0) {
            $this->doSomethingRecursive($level - 1);
        }
    }
}
