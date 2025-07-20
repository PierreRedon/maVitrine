<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/api/contact', name: 'api_contact', methods: ['POST'])]
    public function contact(Request $request, MailerInterface $mailer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['name'], $data['email'], $data['message'])) {
            return new JsonResponse(['success' => false, 'error' => 'Champs manquants'], 400);
        }

        $email = (new Email())
            ->from($data['email'])
            ->to('contact@pierre-redon.com') // ou ton adresse test
            ->subject('Nouveau message de contact')
            ->text("Nom: {$data['name']}\nEmail: {$data['email']}\n\nMessage:\n{$data['message']}");

        try {
            $mailer->send($email);
            return new JsonResponse(['success' => true]);
        } catch (\Throwable $e) {
            return new JsonResponse(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
