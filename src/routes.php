<?php

use Slim\Http\Request;
use Slim\Http\Response;

// // Routes

// $app->get('/[{name}]', function (Request $request, Response $response, array $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

$app->get('/users[/[{name}]', function(Request $request, Response $response, $args){
    // $sql = "SELECT * FROM table_user";
    // $stmt = $this->db->prepare($sql);
    // $stmt->execute();
    // $result = $stmt->fetchAll();
    // return $response->withJson(["status"=>"success", "data"=>$result],200);
     if (!empty($args['name'])) {
        return $response->write("Why Hello " . $args['name']);
    } else {
        return $response->write("Hello!");
}
});

// $app->get('/users/{id}', function(Request $request, Response $response, $args){
// //     try{
// //         $id     = $args['id'];
// //         // $email = $args["email"];
// //         $sql = "SELECT * FROM table_user WHERE id_user = $id";
// //         $stmt = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
// //         $stmt->execute();
// //         $result = $stmt->fetch();
// //         if($result){
// //             return $response->withJson(["status"=>"success", "data"=>$result],200);
// //         }else{
// //             return $response->withJson(array('status' => 'User Not Found'),422);
// //         }
// //     }
// //    catch(\Exception $ex){
// //        return $response->withJson(array('error' => $ex->getMessage()),422);
// //    }
//      echo "The first parameter is " . $args;
// });

// $app->run();