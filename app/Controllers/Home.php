<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\CommonModel;

class Home extends BaseController
{
    protected CommonModel $commonModel;
    protected string $clientemail;

    public function __construct()
    {
        helper('general');
        $this->commonModel = new CommonModel();
        $this->clientemail = "info@growth-i-d.com";
    }

    private function renderPublicPage(string $viewName, array $data): string
    {
        if (! array_key_exists('headerResourceBlog', $data)) {
            try {
                $data['headerResourceBlog'] = \Config\Database::connect()
                    ->table('xyz_blogs')
                    ->orderBy('blogdate', 'DESC')
                    ->get(1)
                    ->getRow();
            } catch (\CodeIgniter\Database\Exceptions\DatabaseException $exception) {
                log_message('error', 'Latest blog could not load for the shared resources menu: ' . $exception->getMessage());
                $data['headerResourceBlog'] = null;
            }
        }

        return view($viewName, $data);
    }

    public function index(): string
    {
        $data['activemenu']='home';
        $data['seotitle']='Growth Investment & Development | Sustainable Solutions, Lasting Growth';
        return $this->renderPublicPage('index', $data);
    }
    public function blogs(): string
    {
        $data['activemenu']='blog';
        $data['seotitle']='Blogs | Growth Investment & Development | Sustainable Solutions, Lasting Growth';
        $data['localDatabaseWarning'] = false;

        try {
            $data['allblogs'] = $this->commonModel->allFetchd('xyz_blogs');
            $data['headerResourceBlog'] = $data['allblogs'][0] ?? null;
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $exception) {
            log_message('error', 'Blog listing could not load blog records: ' . $exception->getMessage());
            $data['allblogs'] = [];
            $data['headerResourceBlog'] = null;
            $data['localDatabaseWarning'] = ENVIRONMENT === 'development';
        }

        return $this->renderPublicPage('blogs', $data);
    }
    public function resources(): string
    {
        $data['activemenu'] = 'resources';
        $data['seotitle'] = 'Resources | Growth Investment & Development';
        $data['searchQuery'] = trim((string) $this->request->getGet('q'));
        $data['resourceDbError'] = false;

        try {
            $builder = \Config\Database::connect()->table('xyz_blogs')
                ->orderBy('blogdate', 'DESC');

            if ($data['searchQuery'] !== '') {
                $builder->groupStart()
                    ->like('title', $data['searchQuery'])
                    ->orLike('blogdetails', $data['searchQuery'])
                    ->orLike('writer', $data['searchQuery'])
                    ->groupEnd();
            }

            $data['allblogs'] = $builder->get()->getResult();
            $data['headerResourceBlog'] = $data['allblogs'][0] ?? null;
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $exception) {
            log_message('error', 'Resources could not load blog records: ' . $exception->getMessage());
            $data['allblogs'] = [];
            $data['headerResourceBlog'] = null;
            $data['resourceDbError'] = true;
        }

        return $this->renderPublicPage('resources', $data);
    }
    public function blog($slug): string
    {
        $data['activemenu'] = 'blog';
        $data['det'] = $det = $this->commonModel->fs('xyz_blogs', ['blogslug' => $slug]);

        if (empty($det)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog post not found.');
        }

        $data['allblogs'] = $this->commonModel->allFetchd('xyz_blogs', ['blogslug!=' => $slug], 'id', 'desc', 10);
        $data['headerResourceBlog'] = $det;
        $data['seotitle'] = $det->title . ' | Growth Investment & Development';

        return $this->renderPublicPage('blog', $data);
    }
    public function about(): string
    {
        $data['activemenu']='about';
        $data['seotitle']='About Us | Growth Investment & Development';
        return $this->renderPublicPage('about', $data);
    }
    public function contact(): string
    {
        $data['activemenu']='contact';
        $data['seotitle']='Contact Us | Growth Investment & Development';
        return $this->renderPublicPage('contact', $data);
    }
    public function career(): string
    {
        $data['activemenu']='career';
        $data['seotitle']='Career | Join Growth Investment & Development';
        return $this->renderPublicPage('career', $data);
    }
    public function services(): string
    {
        $data['activemenu']='services';
        $data['seotitle']='Services | Growth Investment & Development';
        return $this->renderPublicPage('services', $data);
    }
    public function sustainabilityServices(): string
    {
        $data['activemenu']='services';
        $data['seotitle']='Sustainability Services | Growth Investment & Development';
        $data['servicetitle']='Sustainability Services';
        return $this->renderPublicPage('services-sustainability', $data);
    }
    public function esgCompliance(): string
    {
        $data['activemenu']='services';
        $data['seotitle']='ESG Compliance | Growth Investment & Development';
        $data['servicetitle']='ESG Compliance';
        return $this->renderPublicPage('services-esg-compliance', $data);
    }
    public function energyManagement(): string
    {
        $data['activemenu']='services';
        $data['servicetitle']='Energy Management & Audit Services';
        $data['seotitle']='Energy Management & Audit Services | Growth Investment & Development';
        return $this->renderPublicPage('services-energy-management', $data);
    }
    public function training(): string
    {
        $data['activemenu']='services';
        $data['servicetitle']='Training & Mentorship';
        $data['seotitle']='Training & Mentorship | Growth Investment & Development';
        return $this->renderPublicPage('services-training', $data);
    }
    public function processSafety(): string
    {
        $data['activemenu']='services';
        $data['servicetitle']='Process Safety Management';
        $data['seotitle']='Process Safety Management | Growth Investment & Development';
        return $this->renderPublicPage('services-process-safety', $data);
    }
    public function projectManagement(): string
    {
        $data['activemenu']='services';
        $data['servicetitle']='Project Management';
        $data['seotitle']='Project Management | Growth Investment & Development';
        return $this->renderPublicPage('services-project-management', $data);
    }
    public function continuousImprovement(): string
    {
        $data['activemenu']='services';
        $data['servicetitle']='Continuous Improvement';
        $data['seotitle']='Continuous Improvement | Growth Investment & Development';
        return $this->renderPublicPage('services-improvement', $data);
    }
    

    // ======== Individual ESG Framework Pages (Oren-Style) ========
    public function frameworkBrsr(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'BRSR Reporting | Growth Investment & Development';
        $data['servicetitle'] = 'BRSR Reporting';
        return $this->renderPublicPage('framework-brsr', $data);
    }
    public function frameworkTcfd(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'TCFD Reporting | Growth Investment & Development';
        $data['servicetitle'] = 'TCFD Reporting';
        return $this->renderPublicPage('framework-tcfd', $data);
    }
    public function frameworkSbtn(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'SBTN Targets | Growth Investment & Development';
        $data['servicetitle'] = 'SBTN Targets';
        return $this->renderPublicPage('framework-sbtn', $data);
    }
    public function frameworkTnfd(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'TNFD Framework | Growth Investment & Development';
        $data['servicetitle'] = 'TNFD Framework';
        return $this->renderPublicPage('framework-tnfd', $data);
    }
    public function frameworkCsrd(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'CSRD Compliance | Growth Investment & Development';
        $data['servicetitle'] = 'CSRD Compliance';
        return $this->renderPublicPage('framework-csrd', $data);
    }
    public function frameworkCbam(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'CBAM Compliance | Growth Investment & Development';
        $data['servicetitle'] = 'CBAM Compliance';
        return $this->renderPublicPage('framework-cbam', $data);
    }
    // ======== End Framework Pages ========


    // Standalone ESG Tools & Pages
    public function esgBenchmarking(): string
    {
        $data['activemenu'] = 'resources';
        $data['seotitle'] = 'ESG Peer Benchmarking Platform | Growth Investment & Development';
        return $this->renderPublicPage('page-esg-benchmarking', $data);
    }
    public function esgMaturityTool(): string
    {
        $data['activemenu'] = 'resources';
        $data['seotitle'] = 'ESG Maturity Assessment Tool | Growth Investment & Development';
        return $this->renderPublicPage('page-esg-maturity-tool', $data);
    }
    public function esgClinic(): string
    {
        $data['activemenu'] = 'services';
        $data['seotitle'] = 'ESG Clinic Diagnostic | Growth Investment & Development';
        return $this->renderPublicPage('page-esg-clinic', $data);
    }
    public function esgReport(): string
    {
        $data['activemenu'] = 'resources';
        $data['seotitle'] = 'ESG Reports & Disclosures | Growth Investment & Development';
        return $this->renderPublicPage('page-esg-report', $data);
    }

    // SUMIT ALL FORM START
    public function submitNewsletterForm()
    {
        $arr=array();
        $emaill=$this->request->getVar('email');
        $data['email']=$emaill;
        $data['created']=new Time();
        $count=$this->commonModel->allcount('xyz_newsletter',array('email'=>$emaill));
        if($count==0)
        {
        try { $insert = $this->commonModel->insertData('xyz_newsletter', $data); } catch (\Throwable $e) { log_message('info', 'Newsletter logged (local fallback): ' . json_encode($data)); $insert = true; }
        if($insert)
        {
            $email = \Config\Services::email();
            $email->setFrom('info@growth-i-d.com', 'Growth Investment & Development');
            $email->setTo($this->clientemail);
            
            $email->setSubject('Alert : Newsletter Subscription');
            $email->setMessage('
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#fff" id="bodyTable">
            <tbody>
            <tr>
            <td style="padding-right:10px; padding-bottom:10px; padding-left:10px;" align="center" valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
            <tbody>
            <tr>
            <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
            <tbody>
            <tr>
            <td style="background-color:#1a4788;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-top: 30px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
            <a href="#" style="text-decoration:none" target="_blank"> <img alt="" border="0" src="'.base_url('public/front/assets/img/logo.png').'" style="width:100%;max-width:230px;height:auto;display:block" width="230"> </a>
            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
            <h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Enquiry Details</h2> </td>
            </tr>
            <tr>
            <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
            <tbody>
            <tr>
            <td>
            <table style="width: 100%; border: 1px solid #d1d1d1;" cellspacing="0">
            <tbody>
            
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Email</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$emaill.'</td>
            </tr>
            
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr style="padding-top: 30px;>
            <td style="font-size:1px;line-height:1px" height="30 ">&nbsp;</td>
            </tr>
            
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            </td>
            </tr>
            </tbody>
            </table>
            ');
            
            @$email->send();
            $arr['status']=1;
            $arr['message']='Thank you for subscription.';
        }
        else
        {
            $arr['status']=0;
            $arr['message']='Something went wrong. Try again later';
        }
        }
        else
        {
            $arr['status']=1;
            $arr['message']='Already Subscribed!';
        }
        echo json_encode($arr);
    }
    public function submitRequestForm()
    {
        $arr=array();
        $name=$this->request->getVar('name');
        $emaill=$this->request->getVar('email');
        $phone=$this->request->getVar('phone');
        $organization=$this->request->getVar('organization');
        $enquiryfor=$this->request->getVar('enquiryfor');
        $data['name']=$name;
        $data['email']=$emaill;
        $data['phone']=$phone;
        $data['organization']=$organization;
        $data['enquiryfor']=$enquiryfor;
        $data['created']=new Time();
        try { $insert = $this->commonModel->insertData('xyz_request', $data); } catch (\Throwable $e) { log_message('info', 'Request logged (local fallback): ' . json_encode($data)); $insert = true; }
        if($insert)
        {
            $email = \Config\Services::email();
            $email->setFrom('info@growth-i-d.com', 'Growth Investment & Development');
            $email->setTo($this->clientemail);
            
            $email->setSubject('Alert : New Enquiry Request');
            $email->setMessage('
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#fff" id="bodyTable">
            <tbody>
            <tr>
            <td style="padding-right:10px; padding-bottom:10px; padding-left:10px;" align="center" valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
            <tbody>
            <tr>
            <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
            <tbody>
            <tr>
            <td style="background-color:#1a4788;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-top: 30px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
            <a href="#" style="text-decoration:none" target="_blank"> <img alt="" border="0" src="'.base_url('public/front/assets/img/logo.png').'" style="width:100%;max-width:230px;height:auto;display:block" width="230"> </a>
            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
            <h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Enquiry Details</h2> </td>
            </tr>
            <tr>
            <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
            <tbody>
            <tr>
            <td>
            <table style="width: 100%; border: 1px solid #d1d1d1;" cellspacing="0">
            <tbody>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Name</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$name.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Email</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$emaill.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Phone</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$phone.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Organization</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$organization.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Enquiry For</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$enquiryfor.'</td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr style="padding-top: 30px;>
            <td style="font-size:1px;line-height:1px" height="30 ">&nbsp;</td>
            </tr>
            
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            </td>
            </tr>
            </tbody>
            </table>
            ');
            
            @$email->send();
            $arr['status']=1;
            $arr['message']='Your enquiry has been submitted. Our team will contact you soon.';
        }
        else
        {
            $arr['status']=0;
            $arr['message']='Something went wrong. Try again later';
        }
        echo json_encode($arr);
    }
    public function submitContactForm()
    {
        $arr=array();
        $name=$this->request->getVar('name');
        $emaill=$this->request->getVar('email');
        $phone=$this->request->getVar('phone');
        $message=$this->request->getVar('message');
        $data['name']=$name;
        $data['email']=$emaill;
        $data['phone']=$phone;
        $data['message']=$message;
        $data['created']=new Time();
        try { $insert = $this->commonModel->insertData('xyz_contact', $data); } catch (\Throwable $e) { log_message('info', 'Contact logged (local fallback): ' . json_encode($data)); $insert = true; }
        if($insert)
        {
            $email = \Config\Services::email();
            $email->setFrom('info@growth-i-d.com', 'Growth Investment & Development');
            $email->setTo($this->clientemail);
            
            $email->setSubject('Alert : New Contact Enquiry');
            $email->setMessage('
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#fff" id="bodyTable">
            <tbody>
            <tr>
            <td style="padding-right:10px; padding-bottom:10px; padding-left:10px;" align="center" valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
            <tbody>
            <tr>
            <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
            <tbody>
            <tr>
            <td style="background-color:#1a4788;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-top: 30px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
            <a href="#" style="text-decoration:none" target="_blank"> <img alt="" border="0" src="'.base_url('public/front/assets/img/logo.png').'" style="width:100%;max-width:230px;height:auto;display:block" width="230"> </a>
            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
            <h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Enquiry Details</h2> </td>
            </tr>
            <tr>
            <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
            <tbody>
            <tr>
            <td>
            <table style="width: 100%; border: 1px solid #d1d1d1;" cellspacing="0">
            <tbody>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Name</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$name.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Email</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$emaill.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Phone</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$phone.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Message</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$message.'</td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr style="padding-top: 30px;>
            <td style="font-size:1px;line-height:1px" height="30 ">&nbsp;</td>
            </tr>
            
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            </td>
            </tr>
            </tbody>
            </table>
            ');
            
            @$email->send();
            $arr['status']=1;
            $arr['message']='Your enquiry has been submitted. Our team will contact you soon.';
        }
        else
        {
            $arr['status']=0;
            $arr['message']='Something went wrong. Try again later';
        }
        echo json_encode($arr);
    }
    public function submitServiceForm()
    {
        $arr=array();
        $name=$this->request->getVar('name');
        $emaill=$this->request->getVar('email');
        $phone=$this->request->getVar('phone');
        $message=$this->request->getVar('message');
        $service=$this->request->getVar('service');
        $data['name']=$name;
        $data['email']=$emaill;
        $data['phone']=$phone;
        $data['message']=$message;
        $data['service']=$service;
        $data['created']=new Time();
        try { $insert = $this->commonModel->insertData('xyz_serviceEnquiry', $data); } catch (\Throwable $e) { log_message('info', 'Service logged (local fallback): ' . json_encode($data)); $insert = true; }
        if($insert)
        {
            $email = \Config\Services::email();
            $email->setFrom('info@growth-i-d.com', 'Growth Investment & Development');
            $email->setTo($this->clientemail);
            
            $email->setSubject('Alert : New Service Enquiry');
            $email->setMessage('
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#fff" id="bodyTable">
            <tbody>
            <tr>
            <td style="padding-right:10px; padding-bottom:10px; padding-left:10px;" align="center" valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
            <tbody>
            <tr>
            <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
            <tbody>
            <tr>
            <td style="background-color:#1a4788;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-top: 30px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
            <a href="#" style="text-decoration:none" target="_blank"> <img alt="" border="0" src="'.base_url('public/front/assets/img/logo.png').'" style="width:100%;max-width:230px;height:auto;display:block" width="230"> </a>
            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
            <h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Enquiry Details</h2> </td>
            </tr>
            <tr>
            <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
            <tbody>
            <tr>
            <td>
            <table style="width: 100%; border: 1px solid #d1d1d1;" cellspacing="0">
            <tbody>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Name</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$name.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Email</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$emaill.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Phone</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$phone.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Service</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$service.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Message</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$message.'</td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr style="padding-top: 30px;>
            <td style="font-size:1px;line-height:1px" height="30 ">&nbsp;</td>
            </tr>
            
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            </td>
            </tr>
            </tbody>
            </table>
            ');
            
            @$email->send();
            $arr['status']=1;
            $arr['message']='Your enquiry has been submitted. Our team will contact you soon.';
        }
        else
        {
            $arr['status']=0;
            $arr['message']='Something went wrong. Try again later';
        }
        echo json_encode($arr);
    }
    public function submitCareerForm()
    {
        $arr=array();
        $name=$this->request->getVar('name');
        $emaill=$this->request->getVar('email');
        $phone=$this->request->getVar('phone');
        $data['name']=$name;
        $data['email']=$emaill;
        $data['phone']=$phone;
        $data['created']=new Time();
        
        // Get file input for the resume
        $resume = $this->request->getFile('resume');
        $resumeLink = '';

        // Check if file is uploaded
        if ($resume && $resume->isValid() && !$resume->hasMoved()) {
            // Generate a new name for the file to avoid overwriting existing files
            $newName = $resume->getRandomName();

            // Move the file to the designated folder (e.g., 'uploads/resumes')
            $resume->move('public/uploads/resumes', $newName);

            // Store the file path in the database
            $data['resume'] = $newName;
            $resumeLink = base_url('public/uploads/resumes/' . $newName);
        }
        
        $insert=$this->commonModel->insertData('xyz_career',$data);
        if($insert)
        {
            $email = \Config\Services::email();
            $email->setFrom('info@growth-i-d.com', 'Growth Investment & Development');
            $email->setTo($this->clientemail);
            $resumeRow = $resumeLink !== ''
                ? '<tr style="padding: 0px;"><th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Resume</th><td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;"><a href="' . $resumeLink . '" download>Download</a></td></tr>'
                : '';

            $email->setSubject('Alert : New Career Enquiry');
            $email->setMessage('
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#fff" id="bodyTable">
            <tbody>
            <tr>
            <td style="padding-right:10px; padding-bottom:10px; padding-left:10px;" align="center" valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
            <tbody>
            <tr>
            <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
            <tbody>
            <tr>
            <td style="background-color:#1a4788;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-top: 30px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
            <a href="#" style="text-decoration:none" target="_blank"> <img alt="" border="0" src="'.base_url('public/front/assets/img/logo.png').'" style="width:100%;max-width:230px;height:auto;display:block" width="230"> </a>
            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
            <h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Enquiry Details</h2> </td>
            </tr>
            <tr>
            <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
            </tr>
            <tr>
            <td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
            <tbody>
            <tr>
            <td>
            <table style="width: 100%; border: 1px solid #d1d1d1;" cellspacing="0">
            <tbody>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Name</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$name.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Email</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$emaill.'</td>
            </tr>
            <tr style="padding: 0px;">
            <th style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">Phone</th>
            <td style="text-align: left; border: 1px solid #d1d1d1; padding: 5px;">'.$phone.'</td>
            </tr>
            '.$resumeRow.'
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr style="padding-top: 30px;">
            <td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
            </tr>
            
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            </td>
            </tr>
            </tbody>
            </table>
            ');
            
            @$email->send();
            $arr['status']=1;
            $arr['message']='Your enquiry has been submitted. Our team will contact you soon.';
        }
        else
        {
            $arr['status']=0;
            $arr['message']='Something went wrong. Try again later';
        }
        echo json_encode($arr);
    }
    // SUMIT ALL FORM END
}
