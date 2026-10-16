<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('career', 'Home::career');
$routes->get('services', 'Home::services');
$routes->get('blogs', 'Home::blogs');
$routes->get('blog/(:any)', 'Home::blog/$1');

$routes->get('sustainability-services', 'Home::sustainabilityServices');
$routes->get('esg-compliance-services', 'Home::esgCompliance');
$routes->get('energy-management-audit-services', 'Home::energyManagement');
$routes->get('training-mentorship', 'Home::training');
$routes->get('process-safety-management', 'Home::processSafety');
$routes->get('project-management', 'Home::projectManagement');
$routes->get('continuous-improvement', 'Home::continuousImprovement');

// ALL FORM SUBMISSION
$routes->post('submit-request-form', 'Home::submitRequestForm');
$routes->post('submit-contact-form', 'Home::submitContactForm');
$routes->post('submit-service-form', 'Home::submitServiceForm');
$routes->post('submit-career-form', 'Home::submitCareerForm');
$routes->post('submit-newsletter-form', 'Home::submitNewsletterForm');

// ADMIN ROUTING
$routes->get('admin', 'Admin::login');
$routes->post('admin/login', 'Admin::adminLogin');
$routes->get('admin/logout', 'Admin::logout');

$routes->get('admin/dashboard', 'Admin::dashboard',['filter' => 'adminlogin']);

// Contact Enquiry
$routes->get('admin/contact-leads', 'Admin::ContactLeads',['filter' => 'adminlogin']);

// Career Enquiry
$routes->get('admin/career-leads', 'Admin::CareerLeads',['filter' => 'adminlogin']);

// Service Enquiry
$routes->get('admin/service-leads', 'Admin::ServiceLeads',['filter' => 'adminlogin']);

$routes->get('admin/newsletter', 'Admin::NewsLeads',['filter' => 'adminlogin']);
$routes->get('admin/request', 'Admin::RequestLeads',['filter' => 'adminlogin']);

$routes->post('admin/delete-lead', 'Admin::deleteLeads',['filter' => 'adminlogin']);



// Blogs
$routes->get('admin/blogs', 'Admin::Blogs',['filter' => 'adminlogin']);
$routes->get('admin/add-blog', 'Admin::addBlog',['filter' => 'adminlogin']);
$routes->post('admin/create-blog', 'Admin::createBlog',['filter' => 'adminlogin']);
$routes->post('admin/delete-blog', 'Admin::deleteBlog',['filter' => 'adminlogin']);
$routes->get('admin/edit-blog/(:any)', 'Admin::editBlog/$1',['filter' => 'adminlogin']);
$routes->post('admin/update-blog', 'Admin::updateBlog',['filter' => 'adminlogin']);