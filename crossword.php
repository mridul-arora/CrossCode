<?php include "assets/parts/includes.php";?>
<!DOCTYPE html>
<?php
session_start();
$a=$_SESSION['u_id'];
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Main Page
    </title>
</head>
<style>
    body {
        cursor: pointer;
    }
    .thiscontainer {
        margin-top: 6vh;
        margin-bottom: 2vh;
        height: 80%;
        width: auto;
        background-color: ;
    }
    .insidecontainer {
        margin-bottom: 5px;
        margin-top: 5px;
    }
    .row {
        padding: 0.75em 0.75em;
        margin-right: -2.05em;
        text-align: center;
        background-color: aliceblue;
        color: #3e505b;
        cursor: pointer;
        font-weight: bold;
    }
    .active,
    .row:hover {
        background-color: #666;
        color: white;
    }
        {
        background-color: #3e505b;
        color: aliceblue;
    }
    .right {
        margin-bottom: 5px;
        margin-top: 5px;
        float: right;
        background-color: chartreuse;
        border: 20px bold black;
        position: relative;
    }
    .question {
        margin-bottom: 5px;
        margin-top: 5px;
        float: left;
        background-color: darkcyan;
        width: 100%;
        position: absolute;
        height: 49rem;
        color: white;
        cursor: pointer;
        font-family: sans-serif;
        font-size: 115%;
/*Disable Selection*/
        -moz-user-select: none;
        /* Firefox */
        -ms-user-select: none;
        /* Internet Explorer */
        -khtml-user-select: none;
        /* KHTML browsers (e.g. Konqueror) */
        -webkit-user-select: none;
        /* Chrome, Safari, and Opera */
        -webkit-touch-callout: none;
        /* Disable Android and iOS callouts*/
    }
    .puzzleborder {
        margin-bottom: 5px;
        margin-top: 5px;
        margin-left: -1em;
        float: left;
        border: 5px solid white;
        width: 95%;
        position: absolute;
        height: 49rem;
        color: white;
    }
    .puzzle {
        margin-bottom: 0px;
        margin-top: 3rem;
        margin-left: 4rem;
        float: left;
        /* background-color:white;*/
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid #8d775f;
        width: 86rem;
        /*94-8*/
        position: absolute;
        height: 42rem;
        /*48-6*/
        color: black;
        box-shadow: 10px 5px 35px 7px #8d775f;
        /*shadow colour is #8d775f*/
    }
    .vl {
        border-left: 2px solid white;
        border-right: 2px solid white;
        float: right;
        height: 49rem;
        width: .5rem;
        margin-top: 10px;
    }
    /*CSS of crosscode Units begins*/
    .crossrow {
        height: 2.63em;
        width: 100%;
        background-color: ;
        margin-top: 1.2px;
        padding-left: 12px;
        padding-right: 12px;
    }
    .unit {
        height: 2.41em;
        width: 2.41em;
        float: left;
        background-color: ;
        margin-left: 1px;
    }
    .letter {
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .letter:hover{
         transform: scale(1.3);
    }
    .subset {
        font-size: 10px;
        text-align: left;
        vertical-align: sub;
    }
    /*CSS of crosscode Units ends*/
</style>

<body>
    <!--Navigation Bar-->
    <!--Ignore this Navigation bar, its from my old project-->
    <nav class='navbar navbar-inverse navar-fixed-top'>
        <div class='container-fluid'>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>


        </div>
    </nav>

    <div class="container-fluid thiscontainer">

        <!--this is the 9/12th crosscrode part-->
        <div class="col-md-9 insidecontainer">

            <!--the puzzle with puzzle border-->
            <div class="puzzleborder">
                <div class="puzzle">
                      <form method="POST" action="points.php">
                    <!--Crossword Rows-->
                    <!--1-->
                    <div class="crossrow">

                        <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]"  autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--17-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--18-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>


                    </div>
                    <!--2-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

                    </div>
                    <!--3-->
                    <div class="crossrow">
                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>


                    </div>
                    <!--4-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--5-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array4[]" autocomplete="off" value=""></span></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array4[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--6-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array12[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array6[]" autocomplete="off" value=""></span></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--7-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--17-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--8-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array13[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--9-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--10-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--17-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--18-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--10-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array8[]" autocomplete="off" value=""></span></div>
                        <!--8-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array8[]" autocomplete="off" value=""></span></div>
                        <!--9-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array8[]" autocomplete="off" value=""></span></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--11-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array9[]" autocomplete="off" value=""></span></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                          <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                    </form>

                </div>
            </div>

            <!--the vertical line-->
            <div class="vl"></div>
        </div>

        <!--this is the questions 3/12th part-->
        <div class="col-md-3 insidecontainer">

            <!--it displays the question-->
            <div class="left">
                <div id="ques1">
                    <pre class="question">
<h3>Question-1:</h3>
#include &lt;stdio.h&gt;
int main()
{
     switch(*(1+"AB" "CD"+1)){
        case 'A':printf("among");
                  break;
        case 'B':printf("after");
                  break;
        case 'C':printf("above");
                  break;
        case 'D':printf("below");
 }
return 0;
}
<h3>Across 1</h3>
                </pre>
                </div>
                <div id="ques2">
                    <pre class="question">
<h3>Question-2:</h3>
#include &lt;iostream&gt;
#include &lt;cstring&gt;
using namespace std;

int main()
{
    char s1[] = "justypedonthink";
    char s2 = 'd';
    char *ptr = strchr( s1, s2);
    cout &lt;&lt; ptr;
    return 0;
}

<h3>Down 2</h3>
                    </pre>
                </div>
                <div id="ques3">
                    <pre class="question">

                </pre>
                </div>
                <div id="ques4">
                    <pre class="question">
Ques 4>
                </pre>
                </div>
                <div id="ques5">
                    <pre class="question">
Ques 5>

                </pre>
                </div>
                <div id="ques6">
                    <pre class="question">
Ques 6>

                </pre>
                </div>
                <div id="ques7">
                    <pre class="question">
Ques 7>
#include&lt;iostream&gt;
using namespace std;
int main()
{
    if (!(cout &lt;&lt; "crosscode"))
       cout &lt;&lt;" cross ";
    else
       cout &lt;&lt; "code ";

    return 0;
}
                </pre>
                </div>
                <div id="ques8">
                    <pre class="question">
Ques 8>

                </pre>
                </div>
                <div id="ques9">
                    <pre class="question">
Ques 9>
#include&lt;iostream&gt;
using namespace std;
int main()
{
    if (!(cout &lt;&lt; "crosscode"))
       cout &lt;&lt;" cross ";
    else
       cout &lt;&lt; "code ";

    return 0;
}
                </pre>
                </div>
                <div id="ques10">
                    <pre class="question">
Ques 10>

                </pre>
                </div>
                <div id="ques11">
                    <pre class="question">
Ques 11>

                </pre>
                </div>
                <div id="ques12">
                    <pre class="question">
Ques 12>

                </pre>
                </div>
            </div>

            <!--it displays the numbers from 1 to 12-->
            <div class="right">
                <div class="row" id="qnos1" onclick="showques1()">1</div>
                <div class="row" id="qnos2" onclick="showques2()">2</div>
                <div class="row" id="qnos3" onclick="showques3()">3</div>
                <div class="row" id="qnos4" onclick="showques4()">4</div>
                <div class="row" id="qnos5" onclick="showques5()">5</div>
                <div class="row" id="qnos6" onclick="showques6()">6</div>
                <div class="row" id="qnos7" onclick="showques7()">7</div>
                <div class="row" id="qnos8" onclick="showques8()">8</div>
                <div class="row" id="qnos9" onclick="showques9()">9</div>
                <div class="row" id="qnos10" onclick="showques10()">10</div>
                <div class="row" id="qnos11" onclick="showques11()">11</div>
                <div class="row active" id="qnos12" onclick="showques12()">12</div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="assets/js/showques.js"></script>

    <!--Script for highlighting from 1 to 12 when hover and active-->
    <script>
        var btns = document.getElementsByClassName("row");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</body>

</html>


<!--<html>
<body>
 <div><iframe src='https://puzzel.org/en/crossword/embed?p=-L1v2n-yhlUB-bGDzGol' width='750' height='750' frameborder='0' width='750' height='800' frameborder='0'></iframe></div>
   <input type="text" maxlength="1" autocomplete="off" value="">
    <input type="text" maxlength="1" autocomplete="off" value="">
    <input type="text" maxlength="1" autocomplete="off" value="">
    <input type="text" maxlength="1" autocomplete="off" value="">
    <input type="text" maxlength="1" autocomplete="off" value="">
    <input type="text" maxlength="1" autocomplete="off" value="">
    <input type="text" maxlength="1" autocomplete="off" value="">
</body>
</html>
-->
