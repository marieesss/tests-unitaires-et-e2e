<?php

namespace Mjees\TestsPhp\tests\model;


use Mjees\Tests\model\TaskManager;
use PHPUnit\Framework\TestCase;

class TaskManagerTest extends TestCase
{
    public function testAddTask()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");

        $this->assertEquals(["Ajouter une nouvelle tâche"], $tasks->getTasks());
        $this->assertCount(1, $tasks->getTasks());

    }

    public function testRemoveTask()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");
        $tasks->removeTask(0);


        $this->assertCount(0, $tasks->getTasks());
        $this->assertEquals([], $tasks->getTasks());
    }

    public function testGetTasks()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");
        $tasks->addTask("Ajouter une nouvelle tâche une deuxième fois");


        $this->assertEquals(["Ajouter une nouvelle tâche", "Ajouter une nouvelle tâche une deuxième fois"], $tasks->getTasks());
    }

    public function testGetTask()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");
        $tasks->addTask("Ajouter une nouvelle tâche une deuxième fois");


        $this->assertEquals("Ajouter une nouvelle tâche une deuxième fois", $tasks->getTask(1));
    }


    public function testGetInvalidIndexThrowsException()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");
        $tasks->addTask("Ajouter une nouvelle tâche une deuxième fois");


        $this->expectException(\OutOfBoundsException::class);
        $tasks->getTask(2);
    }


    public function testRemoveInvalidIndexThrowsException()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");
        $tasks->addTask("Ajouter une nouvelle tâche une deuxième fois");


        $this->expectException(\OutOfBoundsException::class);
        $tasks->removeTask(2);
    }

    public function testTaskOrderAfterRemoval()
    {
        $tasks = new TaskManager();

        $tasks->addTask("Ajouter une nouvelle tâche");
        $tasks->addTask("Ajouter une nouvelle tâche une deuxième fois");
        $tasks->addTask("Ajouter une nouvelle tâche une trosième fois");


        $this->assertEquals("Ajouter une nouvelle tâche une deuxième fois", $tasks->getTask(1));

        $tasks->removeTask(1);

        $this->assertEquals("Ajouter une nouvelle tâche une trosième fois", $tasks->getTask(1));


    }



}