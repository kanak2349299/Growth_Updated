<?php

namespace App\Controllers;
use App\Models\CommonModel;
use CodeIgniter\Files\File;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function __construct()
    {
    // Load session service
    $this->session = \Config\Services::session();
    // Load the "general" helper
    helper('general');
    // Create an instance of the CommonModel
    $this->commonModel = new CommonModel();
    $this->loginid=session()->get('id');
    }

    public function login()
    {
        helper(['form']);
        $data['metatitle']="Admin Login";
        return view('admin/login',$data);
    } 
    public function dashboard()
    {
        $data['totalBlogs']=$this->commonModel->allCount('xyz_blogs');
        $data['totalContact']=$this->commonModel->allCount('xyz_contact');
        $data['totalCareer']=$this->commonModel->allCount('xyz_career');
        $data['totalNews']=$this->commonModel->allCount('xyz_newsletter');
        $data['metatitle']="Dashboard";
        return view('/admin/dashboard',$data);
    } 
    
    
    public function adminLogin()
    {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $password=md5($password);
        $arr=array();
         $data = $this->commonModel->fs('xyz_admin',array('email'=>$email));
        if($data){
            $pass = $data->password;
           
            if($pass==$password){
                $ses_data = [
                    'id' => $data->id,
                    'email' => $data->email,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $arr['status']=1;
                $arr['msg']='Login Successful';
                // return redirect()->to(base_url('admin/dashboard'));
            
            }else{
                $arr['status']=0;
                $arr['msg']='Incorrect Password';
            }
        }else{
            $arr['status']=0;
            $arr['msg']='Email ID not registered';
        }
        echo json_encode($arr);
    }
    
    public function logout(){
         if( session()->has('isLoggedIn') ){
            session()->remove('isLoggedIn');
            return  redirect()->to(base_url('admin/'));
         }
    }
    
    // -----------------------------------CONTACT---------------------
    public function ContactLeads()
    {
        $data['metatitle']="Contact Leads";
        $data['alldata']=$this->commonModel->allFetchd('xyz_contact');
        return view('/admin/leads/contact',$data);
    } 
    public function CareerLeads()
    {
        $data['metatitle']="Career Leads";
        $data['alldata']=$this->commonModel->allFetchd('xyz_career');
        return view('/admin/leads/career',$data);
    } 
    public function ServiceLeads()
    {
        $data['metatitle']="Service Leads";
        $data['alldata']=$this->commonModel->allFetchd('xyz_serviceEnquiry');
        return view('/admin/leads/service',$data);
    } 
    public function NewsLeads()
    {
        $data['metatitle']="Newsletter Subscription";
        $data['alldata']=$this->commonModel->allFetchd('xyz_newsletter');
        return view('/admin/leads/news',$data);
    } 
    public function RequestLeads()
    {
        $data['metatitle']="Request For Enquiry";
        $data['alldata']=$this->commonModel->allFetchd('xyz_request');
        return view('/admin/leads/request',$data);
    } 
    public function deleteLeads()
    {
      $deleteId = $this->request->getVar('deleteId');
      $tablename = $this->request->getVar('tablename');
      $redirect = $this->request->getVar('redirect');
      $del=$this->commonModel->deleteData($tablename,array('id'=>$deleteId));
      if($del)
      {
          $this->session->setFlashdata('success', 'Enquiry deleted.');
          return redirect()->to(base_url('admin/'.$redirect));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/'.$redirect));
      }
}
    



// BLOGS
public function Blogs()
{
    $data['metatitle']="All Blogs";
    $data['alldata']=$this->commonModel->allFetchd('xyz_blogs');
    return view('/admin/blog/blogs',$data);
}
public function addBlog()
{
    $data['metatitle']="Add Blog";
    return view('/admin/blog/add-blog',$data);
}

public function createBlog()
{
   $save['title']=$this->request->getVar('title');
   $save['blogdate']=$this->request->getVar('blogdate');
   $save['blogslug']=$this->request->getVar('slug');
   $save['blogdetails']=$this->request->getVar('description');
   $save['writer']=$this->request->getVar('writer');
   
   // lImage
	$image = $this->request->getFile('image');
	if(!empty($image)){
		if($image->isValid() && !$image->hasMoved()){
			$file_name = $image->getName();
			// Add current date and time to the filename
        $current_datetime = date('Ymd_His');
        $file_name = $current_datetime . '_' . $file_name;

        if ($image->move('./uploads/blogs/', $file_name)) {
            $path = base_url('/uploads/blogs/' . $file_name);
            $save['image'] = $file_name;
        }
		}
	}
	

	$savedata=$this->commonModel->insertData('xyz_blogs',$save);
	if($savedata)
      {
          $this->session->setFlashdata('success', 'Blog added.');
          return redirect()->to(base_url('admin/blogs'));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/blogs'));
      }
}


public function deleteBlog()
{
      $deleteId = $this->request->getVar('deleteId');
      $del=$this->commonModel->deleteData('xyz_blogs',array('id'=>$deleteId));
      if($del)
      {
          $this->session->setFlashdata('success', 'Blog deleted.');
          return redirect()->to(base_url('admin/blogs'));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/blogs'));
      }
}

public function editBlog($bid)
{
    $data['metatitle']="Edit Blog";
    $data['det']=$this->commonModel->fs('xyz_blogs',array('id'=>$bid));
    return view('/admin/blog/edit-blog',$data);
}


public function updateBlog()
{
   $bid=$this->request->getVar('bid');
   $save['title']=$this->request->getVar('title');
   $save['blogdate']=$this->request->getVar('blogdate');
   $save['blogslug']=$this->request->getVar('slug');
   $save['blogdetails']=$this->request->getVar('description');
   $save['writer']=$this->request->getVar('writer');
   // lImage
	$image = $this->request->getFile('image');
	if(!empty($image)){
		if($image->isValid() && !$image->hasMoved()){
			$file_name = $image->getName();
			// Add current date and time to the filename
        $current_datetime = date('Ymd_His');
        $file_name = $current_datetime . '_' . $file_name;

        if ($image->move('./uploads/blogs/', $file_name)) {
            $path = base_url('/uploads/blogs/' . $file_name);
            $save['image'] = $file_name;
        }
		}
	}
	

	$savedata=$this->commonModel->updateData('xyz_blogs',$save,array('id'=>$bid));
	if($savedata)
      {
          $this->session->setFlashdata('success', 'Blog details updated.');
          return redirect()->to(base_url('admin/blogs'));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/edit-blog/'.$bid));
      }
}
// BLOGS


// MEDIA
public function media()
    {
        $data['metatitle']="All Media";
        $data['alldata']=$this->commonModel->allFetchd('media');
        return view('/admin/masters/media',$data);
    } 
    
    public function createMedia()
    {
        // lImage
	$image = $this->request->getFile('media1');
	if(!empty($image)){
		if($image->isValid() && !$image->hasMoved()){
			$file_name = $image->getName();
			// Add current date and time to the filename
        $current_datetime = date('Ymd_His');
        $file_name = $current_datetime . '_' . $file_name;

        if ($image->move('./uploads/media/', $file_name)) {
            $path = base_url('/uploads/media/' . $file_name);
            $save['image'] = $file_name;
        }
		}
	}
	$savedata=$this->commonModel->insertData('media',$save,array('id'=>$bid));
	if($savedata)
      {
          $this->session->setFlashdata('success', 'Image added.');
          return redirect()->to(base_url('admin/media'));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/media'));
      }
    }
    
    
    public function deleteMedia()
{
      $deleteId = $this->request->getVar('deleteId');
      $del=$this->commonModel->deleteData('media',array('id'=>$deleteId));
      if($del)
      {
          $this->session->setFlashdata('success', 'Image deleted.');
          return redirect()->to(base_url('admin/media'));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/media'));
      }
}
// MEDIA

// STUDENT ENROLMENT
public function studentEnrolments()
{
    $data['metatitle']="Student Enrolments";
    $data['alldata']=$this->commonModel->allFetchd('xyz_enrolment');
    return view('/admin/enrolment/overview',$data);
}
public function studentEnrolmentsDet($formid)
{
    $data['metatitle']="Student Enrolments";
    $data['det']=$this->commonModel->fs('xyz_enrolment',array('id'=>$formid));
    return view('/admin/enrolment/details',$data);
}

    public function deleteEnrolment()
{
      $deleteId = $this->request->getVar('deleteId');
      $del=$this->commonModel->deleteData('xyz_enrolment',array('id'=>$deleteId));
      if($del)
      {
          $this->session->setFlashdata('success', 'Record deleted.');
          return redirect()->to(base_url('admin/student-enrolments'));
      }
      else
      {
          $this->session->setFlashdata('error', 'Something went wrong. Try again later.');
          return redirect()->to(base_url('admin/student-enrolments'));
      }
}
// STUDENT ENROLMENT
// Final end of controller

}
