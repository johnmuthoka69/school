<?Php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pp2 extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'firstname', 'lastname', 'studentID', 'course', 'parentsname', 'parents', 'feepaid',
        'classTeacher', 'receiptNO', 'class_name', 'pp2_name'
    ];

    

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'pp2_name' => $this->pp2_name,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'studentID' => $this->studentID,
            'course' => $this->course,
            'parentsname' => $this->parentsname,
            'parents' => $this->parents,
            'feepaid' => $this->feepaid,
            'classTeacher' => $this->classTeacher,
            'receiptNO' => $this->receiptNO,
            'class_name' => $this->class_name,
            // Add other searchable attributes
        ];
    }
}
