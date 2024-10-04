<?php

namespace Tests\Unit;

use App\Models\Employee;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_employee()
    {
        $employee = Employee::factory()->create();

        $this->assertDatabaseHas('employees', [
            'id' => $employee->id,
            'name' => $employee->name
        ]);
    }

    /** @test */
    public function it_can_update_an_employee()
    {
        $employee = Employee::factory()->create();

        $employee->update([
            'salary' => 70000
        ]);

        $this->assertDatabaseHas('employees', [
            'id' => $employee->id,
            'salary' => 70000
        ]);
    }

    /** @test */
    public function it_can_delete_an_employee()
    {
        $employee = Employee::factory()->create();

        $employee->delete();

        $this->assertDatabaseMissing('employees', [
            'id' => $employee->id
        ]);
    }
}
