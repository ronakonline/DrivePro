<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('page');
	}

	public function minors(){
		$data['title'] = 'MINORS/TEENS';
		$data['content'] = '<h6>WHAT IS THE TEEN COURSE?</h6>
								<ul>
								<li>It is a TDLR (Texas Department of Licensing and Regulation) approved course.</li>
								<li>The class is a 46 hour course, which is separated into 32 hours in the classroom and 14 hours of in-car training.</li>
								<li>In the classroom, each class is 2 hours, so the class is for 16 days.</li>
								<li>For in-car training, the 14 hours is divided into 7 hours of driving and 7 hours of observation.</li>
								<li> A permit certificate will be issued after taking 6 hours of the course.</li>
                               </ul><br>
                              <h6>WHEN ARE CLASSES HELD?</h6>
                              <ul><li>Class timings may vary throughout the year. Please call in for different class times or open Teen Class Schedule for more information.</li>
                              <li>A new class begins the first week of every month except for summer. (During the summer, a new class begins every week.</li></ul>
                              <br>
                              <h6>WHAT IF I\'VE ALREADY TAKEN THE BEHIND THE WHEEL PORTION?</h6>
                              <ul><li>We\'ve got you! We offer the classroom portion separately also! Click here for more information!</li></ul>
                              <br>
                              <h6>WHAT IF I\'VE ALREADY TAKEN THE CLASSROOM PORTION?</h6>
                              <ul><li>No problem! We offer behind the wheel  training as well!</li></ul>
                               <br>
                              <h6>WHAT IF I MISS A CLASS?</h6>
                              <ul><li>If you aren\'t able to come to class one day, no worries! You can make it up another day with no extra cost!</li></ul>
                               <br>
                              <h6>DRIVE TIMES</h6>
                              <ul><li>For drive times, we offer pick-up from schools!</li></ul>
                               <br>
                              <h6>DO WE OFFER ROAD TESTS?</h6>
                              <ul><li>Road tests are available at all of our locations! Open Road Tests for more information.</li></ul>
                               <br>
                              <h6>LEARNING DISABILITIES</h6>
                              <ul><li>If necessary, we offer one-on-one help for students with learning disabilities!</li></ul>
                               <br>
                              <h6>GROUP DISCOUNTS</h6>
                              <ul><li>We offer group discounts to large parties! All group members must be present or made known at the time of registration for discount.</li></ul>
                               <br>
                              <h6>ADVANTAGES OF TAKING OUR COURSE</h6>
                              <ul><li>Flexible, behind the wheel training!</li>
                              <li>Plenty drive time slots available everyday!</li>
                              <li>Learn at your convenience!</li></ul>
							';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function teen(){
		$data['title'] = 'TEEN CLASS SCHEDULE';
		$data['content'] = '   A new class starts on the first weekday of each month and lasts 4 weeks. For weekend classes, timing varies.<br>
								<h6>CY FAIR/QUEENSTON LOCATION:</h6>
								<ul>
								<li>Classes are Monday-Thursday 4-6 and 6:30-8:30pm.</li>
                               </ul><br>
                              <h6>CRESTWATER LOCATION:</h6>
                              <ul><li>Classes are Monday-Thursday 4-6 and 6:30-8:30pm. </li>
                              <li>Saturday classes are also offered from 10-12, 12-2, and 2-4. </li></ul>
                              <br>
                              <h6>MISSION BEND/SUGARLAND LOCATION:</h6>
                              <ul><li>Classes are Monday-Thursday 4-6pm and Saturday classes are from 12-2pm. </li></ul>
                              <br>
                              <h6>ALIEF LOCATION:</h6>
                              <ul><li>Saturday and Sunday classes are offered from 11am to 1pm.</li></ul>
                               <br>
                              <h6>FAST TRACK & SUMMER:</h6>
                              <ul><li> A fast track class is offered during Spring Break in March and during Christmas Break in December. </li>
                              <li>In summer, many classes are offered throughout the day.  Open Summer Special for more information.</li></ul>
                               <br>
                             
							';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function adults(){
		$data['title'] = 'ADULTS';
		$data['content'] = '<h6>WHAT IS THE ADULT COURSE?</h6>
								<ul>
								<li>It is a TDLR (Texas Department of Licensing and Regulation) approved course.</li>
								<li>The class is a 6 hour course.</li>
								<li>The class can be taken by anyone 18 or older. </li>
								<li>You may take the written or computer test at our school. Our state of the art teaching guarantees your success!</li>
                               </ul><br>
                              <h6>WHEN ARE CLASSES HELD?</h6>
                              <ul><li>Classes are offered everyday, but timings may vary. </li>
                              <li>Feel free to call (832) 647-3526 for a specific date and time!</li></ul>
                              <br>
                     
                              <h6>DO WE OFFER ROAD TESTS?</h6>
                              <ul><li>Road tests are available at all of our locations! Open Road Tests for more information.</li></ul>
                               <br>
                              <h6>DO WE HAVE BEHIND THE WHEEL TRAINING?</h6>
                              <ul><li>We also offer behind the wheel training!​  </li></ul>
                               <br>
                              <h6>ARE YOU A COLLEGE STUDENT?</h6>
                              <ul><li>College students 18 or older can take the Adults course at a $10 discount from the original price!</li>
                              <li>Please bring your college ID or any proof of your status as a student to receive a discount!</li></ul>
                               <br>
                              <h6>REFER A FRIEND!</h6>
                              <ul><li> If you are satisfied with your service, refer us to a friend and earn more discounts! </li></ul>
							';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function defensived_driving(){
		$data['title'] = 'DEFENSIVE DRIVING';
		$data['content'] = '<h6>WHAT IS THE DEFENSIVE DRIVING COURSE?</h6>
								<ul>
								<li>It is a 6 hour course that can be taken throughout the week.</li>
								<li>If you take this course, you will receive an insurance discount.</li>
								<li>After completing our defensive driving course, your ticket is dismissed!</li>
								<li>Please call in to reserve!</li>
                               </ul>';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function instructor_training(){
		$data['title'] = 'INSTRUCTOR TRAINING';
		$data['content'] = ' DO YOU WANT TO BECOME AN INSTRUCTOR?
								<h6>We develop instructors who are:</h6>
								<ul>
								<li>21 years or older,</li>
								<li>Have had a license for at least one year.</li>
								<li>And have the same passion as us: to produce safe and courteous drivers on the road!.</li>
						
                               </ul><br>
                              <h6>AFTER TAKING OUR COURSE.</h6>
                              <ul><li>You may receive management opportunities!</li>
                             </ul>
                              <br>
                              <h6>WANT TO LEARN MORE?</h6>
                              <ul><li>If you are interested, please call (972) 212-4322 for more information! </li></ul>
                           ';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function management_opportunities(){
		$data['title'] = 'MANAGEMENT & CONTRACTOR OPPORTUNITIES';
		$data['content'] = ' MANAGE ANY OF OUR LOCATIONS ANYWHERE IN TEXAS WITH A SMALL FEE!
								<h6>TO BE PART OF MANAGEMENT...</h6>
								<ul>
								<li>Make sure you are TDLR certified.</li>
								<li>Make sure you meet training requirements (explained below)</li>
						
                               </ul><br>
                              <h6>DON\'T HAVE YOUR TDLR CERTIFICATION?</h6>
                              <ul><li>No problem! We offer courses to help you become certified</li>
                             </ul>
                              <br>
                              <h6>ANY QUESTIONS?</h6>
                              <ul><li>If you have any questions or would like to enroll, please call (972) 212-4322 We\'d love to help! </li></ul>
                           ';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function registration_payment(){
		$data['title'] = 'REGISTRATION/PAYMENT';
		$data['content'] = ' 
								<h6>HOW TO REGISTER</h6>
								<ul>
								<li>You can register to reserve your spot by calling (972) 212-4322 or by calling each location\'s specific number and using a debit or credit card to make payments! For each location\'s phone number.</li>
								<li>Or, you can pay in person at any of our locations!</li>
								<li>COMING SOON: Online Payments!</li>
						
                               </ul>
                           ';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function online_courses(){
	$data['title'] = 'ONLINE COURSES';
	$data['content'] = ' 
								<h6>ALREADY TAKEN A DRIVING COURSE ONLINE?</h6>
								<ul>
								<li>If you choose to take an online course or have already taken it, take the 14 hours behind the wheel training course with us!​​ </li>
								<li>Behind the wheel is offered at any of our locations!</li>
					
						
                               </ul>
                           ';

	$data['img'] = 'post2.jpeg';
	$this->load->view('page',$data);
}
	public function parent_taught(){
		$data['title'] = 'PARENT TAUGHT';
		$data['content'] = ' 
								<h6>ALREADY COMPLETED THE DRIVING PORTION?</h6>
								<ul>
								<li>Complete the 14 hours behind the wheel training with your parents, and enroll in our 32 hours classroom portion!</li>
                               </ul><br>
                               <h6>ALREADY COMPLETED THE CLASSROOM PORTION?</h6>
								<ul>
								<li>Complete the parent-taught 32 hours classroom portion at your own pace, and take the 14 hours behind the wheel training course with us! </li>
                               </ul>
                               <br>
                               <h6>ONLY NEED THE ROAD TEST?</h6>
								<ul>
								<li>Complete the full parent taught teen course, and take the road test with us! </li>
                               </ul>
                           ';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function continuing_education(){
		$data['title'] = 'CONTINUING EDUCATION FOR INSTRUCTORS';
		$data['content'] = ' 
								<h6>WANT TO CONTINUE LEARNING?</h6>
								<ul>
								<li>We offer 4 hour courses throughout the week.</li>
								<li>Through this course, you will receive a certificate of completion for TDLR license renewal.</li>
								<li>Please call  (972) 212-4322 to reserve!</li>
                               </ul>
                           ';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
	public function meet_our_officials(){
		$data['title'] = 'MEET OUR TEAM!';
		$data['content'] = ' 
								<h4>SAQUIB AHMED - DIRECTOR</h4>
									<p>He is a qualified driving education teacher (DET). Mr. Saquib Ahmed teaches teen classes, teen driving, and adult permit classes in various locations for Cy Fair driving school. He is also a teacher at Houston Independent School District. </p>
									<h4>SHAKIR AHMED - ASSISTANT DIRECTOR & ROAD EXAMINER</h4>
									<p>He is a qualified driving education instructor (DET). Mr. Shakir Ahmed teaches teen classes, teen driving, adult permit, and road exams in various locations for Cy Fair driving school. Ever since he graduated from Jersey Village High School in CFISD, he has been teaching respective math and science subjects for over 20 years. Currently, he works at Saint John XXIII College Preparatory. Previously, Mr. Ahmed has taught at Cy Falls, Cy Springs, and Milby Highschool. He was also a Cypress-Fairbanks Independent School District (CFISD) science coach. Besides academics, Shakir is also a renowned zumba instructor at 24 hour fitness and Lifetime.</p>
									<h4>DR. SHAIK AHMED - ASSISTANT DIRECTOR & ROAD EXAMINER</h4>
									<p>He is a qualified supervisor teacher (ST). Dr. Shaik Ahmed teaches teen classes, teen driving, adult permit, and road exams in various locations for Cy Fair driving school. His passion is to seek safe and courteous drivers. After he graduated from Jersey Village High School in CFISD, Dr. Ahmed went on to further pursue a career in education and earned his doctorate at the University of Houston. Shaik Ahmed has been in education for over 20 years. He has been a teacher, principal, and superintendent in public and private schools. </p>
									<h4>DR. NASSER KESHARI - ASSISTANT DIRECTOR & ROAD EXAMINER</h4>
									<p>​He is a qualified driving education instructor (DET). Dr. Nasser Keshari teaches teen classes, teen driving, and adult permit classes at the West Houston location. </p>
									<h4>MARY AHMED - SYSTEM COORDINATOR</h4>
									<p>She is a qualified driving education teacher (DET). She teaches teen, adult, and defensive driving classes for Houston locations.</p>
									<h4>FARZANA AHMED - TEACHER</h4><p>She is a qualified driving education teacher (DET). Mrs. Farzana Ahmed teaches teen classes, teen driving, and adult permit classes at the Cy Fair location. She is also an elementary school teacher at Harmony. </p>
									<h4>DALIA AHMED - TEACHER</h4>
									<p>She is a qualified driving education instructor (DET). Mrs. Dalia Ahmed teaches teen classes, teen driving, and adult permit classes at the Cy Fair location. She also teaches elementary school at Alief ISD. </p>
									<h4>BASSETT STRAUTHER - TEACHER</h4>
									<p>He is a qualified driving education teacher (DET). Mr. Bassett Strauther teaches teen classes, teen driving, and adult permit classes in the West Houston location. He is also a middle school teacher at Goodson in CFISD. </p>
									<h4>TANVEER ISLAM - TEACHER</h4>
									<p>He is a qualified driving education teacher (DET). Mr. Tanveer Islam teaches teen classes, teen driving, and adult permit classes at the Cy Fair location. He works at Salyards Middle School in CFISD. </p>
                           ';

		$data['img'] = 'post2.jpeg';
		$this->load->view('page',$data);
	}
}
