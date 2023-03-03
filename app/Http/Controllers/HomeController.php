<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
       
        $educational_details = [
           0 =>
           [ 
            'icon'=>'/icon/abc.png',
            'title'=>'BS Software Engineering',
            'institution'=>'COMSATS UNIVERSITY, ISLAMABAD',
           ],
           1 =>
           [ 
            'icon'=>'/icon/abc.png',
            'title'=>'Prime Minister Laptop Scheme',
            'institution'=>'Awarded with Laptop from Prime Minister Laptop Scheme',
           ],
        ];

        $social_details = [
            0 =>
            [ 
             'icon'=>'/icon/abc.png',
             'title'=>'Prime Minister Laptop Scheme',
             'date'=>'09/2015',
             'description'=>'Awarded with Laptop from Prime Minister Laptop Scheme',
            ],
            1 =>
            [ 
                'icon'=>'/icon/abc.png',
                'title'=>'Prime Minister Laptop Scheme',
                'date'=>'09/2015',
                'description'=>'Awarded with Laptop from Prime Minister Laptop Scheme',
               ],
         ];


         $skill_details = [
            0 =>
            [ 
             'icon'=>'icons/cypress.svg',
             'title'=>'Cypress',
             'percentage'=>'60%',
            ],
            1 =>
            [ 
             'icon'=>'icons/linux.svg',
             'title'=>'Linux',
             'percentage'=>'100%',
            ],
            2 =>
            [ 
             'icon'=>'icons/GITVcs.svg',
             'title'=>'GIT VCS',
             'percentage'=>'60%',
            ],
            3 =>
            [ 
             'icon'=>'icons/Docker.svg',
             'title'=>'Docker',
             'percentage'=>'60%',
            ],
            4 =>
            [ 
             'icon'=>'icons/endToendTesting.svg',
             'title'=>'End-to-end Testing',
             'percentage'=>'60%',
            ], 
            5 =>
            [ 
             'icon'=>'icons/SAP.svg',
             'title'=>'SAP',
             'percentage'=>'90%',
            ],
            6 =>
            [ 
             'icon'=>'icons/JS.svg',
             'title'=>'JavaScript',
             'percentage'=>'80%',
            ], 
            7 =>
            [ 
             'icon'=>'icons/HTML.svg',
             'title'=>'HTML/CSS',
             'percentage'=>'90%',
            ],
            8 =>
            [ 
             'icon'=>'icons/jira.svg',
             'title'=>'Jira',
             'percentage'=>'90%',
            ], 
            9 =>
            [ 
             'icon'=>'icons/laravelDusk.svg',
             'title'=>'Laravel Dusk',
             'percentage'=>'90%',
            ],
            10 =>
            [ 
             'icon'=>'icons/postman.svg',
             'title'=>'Postman',
             'percentage'=>'90%',
            ], 
            11 =>
            [ 
             'icon'=>'icons/sql.svg',
             'title'=>'SQL',
             'percentage'=>'90%',
            ],
            12 =>
            [ 
             'icon'=>'icons/testrail.svg',
             'title'=>'TestRail',
             'percentage'=>'90%',
            ], 
            13 =>
            [ 
             'icon'=>'icons/swagger.svg',
             'title'=>'Swagger',
             'percentage'=>'90%',
            ],
            14 =>
            [ 
             'icon'=>'icons/time.svg',
             'title'=>'Time Management',
             'percentage'=>'60%',
            ], 
            15 =>
            [ 
             'icon'=>'icons/cicd.svg',
             'title'=>'CICD Pipeline',
             'percentage'=>'60%',
            ],
         ];


         $exp_details = [
            0 =>
            [ 
            
             'title'=>'SR. SQA Automation Engineer',
             'company'=>'Tkxel Pakistan',
             'duration'=>'09/2022 - Present. ',
             'location'=>'Lahore, Pakistan',
             'tasks'=>
             [
                0=>'Working on Automation API and UI using cypress',
             ]
            ],
            1 =>
            [ 
                'title'=>'SQA Team Lead',
                'company'=>'CodesOrbit & RevolveAI',
                'duration'=>'11/2021 - 09/2022',
                'location'=>'Islamabad, Pakistan',
                'tasks'=>
                [
                    0=>'Codesorbit is a project and product-based company covering all the domains like LAMP stack, IOS Apps development, Android/Flutter, and Web Development',
                    1=>'Managing the SQA Team, Assuring Quality for all the products with client communications.',
                
                ]
            ],
            2 =>
            [ 
                'title'=>'SQA Automation Engineer',
                'company'=>'PkTeam',
                'duration'=>'12/2020 - 11/2021 ',
                'location'=>'Rawalpindi, Pakistan',
                'tasks'=>
                [
                    0=>'Working on Automation and Manual Testing of Web and Product based Projects, using Cypress a n d Laravel Dusk, Manual Testing of newly Software\'s and Deploy. Hand on Experience with Laravel Dusk. Projects testing are Designed in MVC Laravel with vue.js, Custom PHP.',
                  
                ]
            ],
            3 =>
            [ 
                'title'=>'SQA Automation Engineer',
                'company'=>'Cloud Launch Pvt Ltd',
                'duration'=>'12/2018 - 11/2020 ',
                'location'=>'London, England',
                'tasks'=>
                [
                    0=>'Worked on Manual Testing & Automation Testing, Software Documentation including Software UML Diagrams, Requirement Analyst, Automation Testing With Laravel Dusk, and Cypress. Projects Tested are Designed in MVC Laravel with vue.js',
                    
                ]
            ],
         ];



         $project_details = [
            0 =>
            [ 
            
             'title'=>'fabPOS',
             'subTitle'=>'',
             'icon'=>'img/projects/project1.png',
             'description'=>'FabPOS is a powerful but simple modern point-of-sale (POS) designed to simplify everyday workday. Take payment, track every sale and inventory, all in one place.',
             
            ],
            1 =>
            [ 
                'title'=>'GemCloud',
                'subTitle'=>'',
                'icon'=>'img/projects/project1.png',
                'description'=>'GemCloud is a software company developing products specifically tailored for the colored gemstone industry. We are committed to upholding the privacy of our customers and the integrity of the gemstone industry. Its Thailand based company.',
            ],
            2 =>
            [ 
                'title'=>'Christiana-Tax Service',
                'subTitle'=>'(Manual and automation)',
                'icon'=>'img/projects/project1.png',
                'description'=>'Its a type of Ride hailing that connect passengers and local drivers using their personal vehicles . In most cases there are a comfortable method  for door-to-door transport. Its working in northway.',
            ],
            3 =>
            [ 
                'title'=>'TopBoxx Food',
                'subTitle'=>'(Manual and automation)',
                'icon'=>'img/projects/project1.png',
                'description'=>'It online portal system for ordering food at your doorsteps on following module.',
            ],
            4 =>
            [ 
                'title'=>'Gemwares',
                'subTitle'=>'(Manual and automation)',
                'icon'=>'img/projects/project1.png',
             'description'=>'Gemwares allow manufacturers to standardize and automate the quotation, controls the entire production process, and allow for real tracking of products and components throughout the factory. Its working in Thailand',
            ],
            5 =>
            [ 
                'title'=>'FlyMe247',
                'subTitle'=>'(Manual and automation)',
                'icon'=>'img/projects/project1.png',
             'description'=>'FlyMe247 is a compelete flight booking qoatation system which automates the flight booking process to help book flights online. It comes with advanced featured and functionalities of third-party supplier integration and more.',
            ],
            6 =>
            [ 
                'title'=>'fabmedic',
                'subTitle'=>'',
                'icon'=>'img/projects/project1.png',
                 'description'=>'',
            ],
         ];
        // print_r( $educational_details);
        // exit;
        return view('portfolio',compact('educational_details','social_details','skill_details','exp_details','project_details'));
    }

    public function submitContactForm(Request $request)
    {
        // print_r($request->all());
        // exit;
        // $first_name = $request['inputFirstName'];
        // $last_name = $request['inputLastName'];
        // $email = $request['inputEmail'];
        // $phone = $request['inputPhone'];
        // $subject = $request['inputSubject'];
        // $message = $request['inputMessage'];
        // $entered_on= CommonFunctions::getCurrentDate();
        // $entered_by = Session::get('Userid');
        // Contact::create([
        //     'FirstName' => $first_name,
        //     'LastName' => $last_name ,
        //     'Email' => $email ,
        //     'PhoneNo' => $phone ,
        //     'Subject' => $subject,
        //     'Message'=> $message,
        //     'Active' => 'Y',
        //     'EnteredOn' => $entered_on,
        //     'EnteredBy' => $entered_by
        // ]);
        return "success";
      //  return view('pages.contact.contact');
    }
}
