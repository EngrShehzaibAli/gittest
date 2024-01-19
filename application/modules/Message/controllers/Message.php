
     <?php
     class Message extends MY_Controller {
         
        
        public function __construct(){
             parent::__construct();
            //  $this->load->library('SmartyLibrary');
            // $this->setTemplateDir(APPPATH . 'message/views'); // Adjust the path accordingly
         }
     
         public function show_message(){

    // Your cURL code goes here
    // create & initialize a cURL session 
    $curl = curl_init();  
    curl_setopt($curl, CURLOPT_URL, "https://dummyjson.com/products");  
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $output = curl_exec($curl);
    
    if ($output === false) {
        echo 'cURL error: ' . curl_error($curl);
    }
    
    curl_close($curl);
// Decode JSON response
$decoded_output = json_decode($output, true);

// Check if decoding was successful
if ($decoded_output === null) {
    echo 'Error decoding JSON: ' . json_last_error_msg();
}

  
    // Assign decoded output to Smarty
    $this->smarty->assign('curl_output', $decoded_output);

    // Display the Smarty template
    $this->smarty->display('message.tpl');
}

        
     
      
     
     
     public function SimpleMessage(){
        $content['message']="Simple view message ";
        $this->load->view("message/message",$content);

     }
    }