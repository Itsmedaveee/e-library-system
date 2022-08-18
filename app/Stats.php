<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class Stats extends Model
{
	public function totalFaculties()
	{
		return Faculty::count(); 
	} 	

	public function totalStudents()
	{
		return Student::count(); 
	} 	

	public function totalBooks()
	{
		return Book::count(); 
	} 	

	public function totalDepartments()
	{
		return Department::count(); 
	} 
}