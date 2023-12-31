<?php declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class JsonImportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('type', ChoiceType::class, [
            'choices' => [
                'groups' => 'groups',
                'organizations' => 'organizations',
                'teams' => 'teams',
                'accounts' => 'accounts',
            ],
        ]);
        $builder->add('file', FileType::class, [
            'required' => true,
        ]);
        $builder->add('import', SubmitType::class, ['icon' => 'fa-upload']);
    }
}
