<?php

namespace AppBundle\Controller;

use AppBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller {

  /**
   * indexAction
   * @Route("/", name="homepage")
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function indexAction(Request $request) {
    $form = $this->createForm(ClientType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $data = $form->getData();
      $body = $this->generateEmail($data);
    }

    return $this->render('default/index.html.twig', [
      'form' => $form->createView(),
      'body' => isset($body) ? $body : null,
    ]);
  }

  /**
   * generateEmail.
   *
   * @param array $data
   * @return string
   */
  private function generateEmail($data) {
    $body = $this->renderView('email/new_client.html.twig', ['data' => $data]);

    return $body;
  }
}
