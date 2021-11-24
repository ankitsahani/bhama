<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
class UsersExport implements FromCollection, WithHeadings,ShouldAutoSize
{
    use Exportable;
   
    /**
    * @return \Illuminate\Support\Collection
    */
    private $field,$searchValue;

    public function __construct(string $searchValue,$field)
    {
         $this->searchValue = $searchValue;
          $this->field = $field;
    }

   
     
    public function collection()
    {
       
       if($this->field=='all'){
            $user = User::orWhere('user_name',  'like','%'.$this->searchValue.'%')->orWhere('first_name',  'like','%'.$this->searchValue.'%')->orWhereRaw("concat(first_name, ' ', last_name) like '%$this->searchValue%' ")->orWhere('email',  'like','%'. $this->searchValue.'%')->orderBy('created_at','DESC')->get();
       
       }
       if(!empty($this->field) && !empty($this->searchValue)){
           $user = User::orWhere('user_name',  'like','%'.$this->searchValue.'%')->orWhere('first_name',  'like','%'. $this->searchValue.'%')->orWhereRaw("concat(first_name, ' ', last_name) like '%$this->searchValue%' ")->orWhere('email',  'like','%'. $this->searchValue.'%')->orderBy('created_at','DESC')->get();
                 
       }else{
               $user = User::orderBy('created_at','DESC')->get();
              
       }
       
         if(count($user) > 0)
      
        {
        $index=1; 
        foreach ($user as $key => $value) {
                        
            $temp['Username']                =  $value['user_name'];
            $temp['First Name']              =  $value['first_name'];
            $temp['Last Name']               =  $value['last_name'];
            $temp['Email']                   =  $value['email'];
            $temp['Subscription']            =  $value['is_subscribed']==1?'Yes':'No';
          
            $data[]                          = $temp; 

           }
       
         }
    else{
        $temp[]='';
        $data[]=$temp;
    }
          
         return Collect($data);
    }
    public function headings(): array
    {
        return [
            'User Name',
            'First Name',
            'Last Name',
            'Email',
            'Subscription',
           
        ];
    }
}





    