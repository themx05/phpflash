<?php

namespace PhpFlash\Utils{

    use Closure;
    use Routing\Request;
    use Routing\Response;

class BodyParser{

        public static function json(): Closure{
            return function(Request& $request, Response $response, Closure $next){
                $match = array();
                if(preg_match("/^application\/json/i",$request->headers['Content-Type'], $match)){
                    $input = json_decode(file_get_contents("php://input"));
                    $request->setOption('body',$input);
                }
                $next();
            };
        }
    }
}
?>