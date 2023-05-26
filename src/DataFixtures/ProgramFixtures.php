<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        // const CATEGORIES = ['Action', 'Aventure', 'Animation', 'Fantastique', 'Horreur',];
        $program = new Program();
        $program->setTitle('Breaking Bad');
        $program->setSynopsis('Un professeur de chimie devient un baron de la drogue, et ça c\'est du Walter White tout craché, c\'est même : pas piqué des hannetons avec une touche de cristal et une pointe de grand bleu !');
        $program->setCategory($this->getReference('category_Action'));
        $this->addReference('$program_0', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The Last Of Us');
        $program->setSynopsis('20 ans après la destruction de la civilisation moderne, Joël, un survivant aguerri est embauché pour aider Ellie, une jeune fille de 14 ans, à s\'échapper d\'une zone de quarantaine oppressive. Ce qui ne devait être qu\'un petit boulot va rapidement tourner en une aventure déchirante à travers les États-Unis, où ils devront compter sur l\'un et l\'autre pour survivre, et ça c\'est cool, c\'est toujours mieux que de voir la pauvre tête de ce pauvre Joël dans Game of Thrones !');
        $program->setCategory($this->getReference('category_Aventure'));
        $this->addReference('$program_1', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('GTO');
        $program->setSynopsis('Ancien voyou, chef de gang, Eikichi Onizuka décide un jour de devenir prof. Sa vocation n\'a rien de pédagogique. Ce qu\'il veut, c\'est pouvoir sortir avec les étudiantes du lycée où il travaille. Pourtant, au fil des chapitres, on se rend compte que le sens de la justice et de l\'honneur de notre héros vont l\'amener à devenir un véritable enseignant, et ça ! Par tous les pépins de la pomme de Newton c\'est pépite !');
        $program->setCategory($this->getReference('category_Animation'));
        $this->addReference('$program_2', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Game of Thrones');
        $program->setSynopsis('Intrigues politiques et batailles épiques dans un royaume fantastique, et en plus il y a des dragons !');
        $program->setCategory($this->getReference('category_Fantastique'));
        $this->addReference('$program_3', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The Walking dead');
        $program->setSynopsis('Des zombies envahissent la terre, ils sont peut-être lents mais nombreux, et ça c\'est pas cool !');
        $program->setCategory($this->getReference('category_Horreur'));
        $this->addReference('$program_4', $program);
        $manager->persist($program);

        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
