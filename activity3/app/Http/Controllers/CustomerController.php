<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data\CustomerDAO;

class CustomerController extends Controller
{

    public function addCustomer(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        
        $dao = new CustomerDAO();
        $result = $dao->addCustomer($firstName, $lastName);
        return $result;
    }
}

