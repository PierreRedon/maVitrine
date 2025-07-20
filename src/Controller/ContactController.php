<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/api/contact', name: 'api_contact', methods: ['POST'])]
    public function send(Request $request, MailerInterface $mailer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $name = $data['name'] ?? '';
        $email = $data['email'] ?? '';
        $message = $data['message'] ?? '';

        if (!$name || !$email || !$message) {
            return new JsonResponse(['error' => 'Champs manquants'], 400);
        }

        $mail = (new Email())
            ->from($email)
            ->to('pierre_redon@hotmail.fr') // Remplace par ta vraie adresse mail
            ->subject('Nouveau message depuis ton portfolio')
            ->text("Nom: $name\nEmail: $email\nMessage:\n$message");

        $mailer->send($mail);

        return new JsonResponse(['success' => true]);
    }
}
