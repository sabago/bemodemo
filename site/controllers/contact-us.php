 <?php  
 //Code from kirby site
 
 return function($kirby, $pages, $page, $site) {
  
      $alert = null;
      $contactemail = $site->contactemail();
  
      if($kirby->request()->is('POST') && get('submit')) {
  
          $data = [
              'name'  => get('name'),
              'email' => get('email'),
              'text'  => get('text'),
          ];
  
          $rules = [
              'name'  => ['required', 'min' => 3],
              'email' => ['required', 'email'],
              'text'  => ['required', 'min' => 3, 'max' => 3000],
          ];
  
          $messages = [
              'name'  => 'Please enter a valid name',
              'email' => 'Please enter a valid email address',
              'text'  => 'Please enter a text between 3 and 3000 characters'
          ];
  
          // some of the data is invalid
          if($invalid = invalid($data, $rules, $messages, $contactemail)) {
              echo 'invalid';
              $alert = $invalid;
  
              // the data is fine, let's send the email
          } else {
              try {
                  $kirby->email([
                      'template' => 'email',
                      'from'     => 'info@bemoacademicconsulting.com',
                      'replyTo'  => $data['email'],
                      'to'       => (string)$site->contactemail(),
                      'subject'  => esc($data['name']) . ' sent you a message from your contact form',
                      'data'     => [
                          'text'   => esc($data['text']),
                          'sender' => esc($data['name'])
                      ]
                  ]);
  
              } catch (Exception $error) {
                  echo 'The form could not be sent';
                  $alert['error'] = "The form could not be sent";
              }
  
              // no exception occured, let's send a success message
              if (empty($alert) === true) {
                  echo 'Your message has been sent, thank you. We will get back to you soon!';                 
                  $data = [];
              }
          }
      }
  
      return [
          'alert'   => $alert,
          'data'    => $data ?? false,
          'success' => $success ?? false
      ];
  };
