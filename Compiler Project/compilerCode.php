<?php
    if(isset($_POST['submit']))
    {
        $compile = new Compile();
          $compile->testFun($_POST['area']);
    }

    if(isset($_POST['path']))
    {
        $data =file_get_contents($_POST['path']);
        $compile = new Compile();
	$compile->testFun($data );
    }

    Class compile{

        public function testFun($code)
        {
            $key = [         "Category", "Derive", "Ilap", "Silap", "Clop", "Series", "Ilapf", "Silapf", "None", "Logical", "terminatethis",         "Replywith", "Seop", "Program", "End", "+", "-", "*", "/", "&&", "||", "~", "==", "<", ">", "!=", "<=", ">=",         "=", ".", "{", "}", "(",")","[", "]", "“", "’", "Using"];
            $value = [ "Class", "Inheritance", "Integer", "SInteger", "Character", "String", "Float", "SFloat", "Void",         "Boolean", "Break immediately from a loop", "Return", "Struct", "Stat Statement", "End Statement",         "Arithmetic Operation", "Arithmetic Operation", "Arithmetic Operation", "Arithmetic Operation",         "Logic operators", "Logic operators", "Logic operators", "relational operators", "relational operators",         "relational operators", "relational operators", "relational operators", "relational operators",         "Assignment operators", "Access operators", "Braces","Braces","Braces", "Braces", "Braces", "Braces", "Quotation mark",         "Quotation mark", "Inclusion"];
            $data = [];
            for ($i = 0; $i < 37; $i++)
            {
                $data+=[ $key[$i] => $value[$i] ];
            }
            $i = 0;     $count = 0;
            $line=[];
            while (isset($code[$i]) ){
                if( $code[$i] != "\0") {
                if($code[$i] != "\n" && $code[$i] != "\r"){
                    if(isset($line[$count])){
                        $line[$count]=$line[$count].$code[$i] ;
                        }
                        else{
                        $line[$count]=$code[$i] ;

                    }
                }
                        if($code[$i] == "\n")
                    $count++;
                }
                            $i++;
            }
            $words[]=null;
            $word=null;
            $i=0;
            for ($wordCount=0; $wordCount <=$count ; $wordCount++) {
                $next = $line[$wordCount];
                while(isset($next[$i]))
                {
                    if($next[$i]!=' '){
                        $word = $word.$next[$i];
                    }
                    else
                    {
                            $words[$wordCount][]=$word ;
                            $word=null;
                    }
                    $i++;
                }
                $words[$wordCount][]=$word ;
                $i=0;
                $word=null;
            }
            for ($wordCount=0; $wordCount <=$count ; $wordCount++) {
                $arr=$words[$wordCount];
                $i=0;
                $num=$wordCount+1;
                if($arr[0]=='//'){
                    echo "<br>"."Comment";
                }
                else{
                    while(isset($arr[$i]))
                    {
                        if(isset($data[$arr[$i]]))
                        echo "<br>". "Line : $num TokenText : " . $arr[$i] . " Token Type: " . $data[$arr[$i]];
                        else
                        echo "<br>"."Line : $num TokenText: " . $arr[$i] . " Token Type: Identifier";
                        $i++;
                    }
                }
            }
        }
    }
?>
