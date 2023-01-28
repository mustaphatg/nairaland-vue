<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            height: 100vh;
        }


        aside {
            flex-basis: 25%;
        }

        main {
            overflow: auto;
            margin-bottom: 100px;
        }

        div.me {
            height: 1200px;
            background-color: red;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body >

    
    <div class="flex w-full h-full flex-wrap mm">

        <header class="shadow-md p-3 w-full">
            <a href="" class="no-underline text-2xl">Mustapha</a>
        </header>

        <aside class=" border-r-2 p-4 h-full">
            <ul>
                <li>home</li>
                <li>about</li>
            </ul>
        </aside>

        <main class="flex-1 bg-blue-50 p-4 h-screen mb-10">
            <h3 class="test-2xl font-sans text-center bold my-4">Mustapha</h3>

            <div class="me">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>

            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>

            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
            
            <p>dfdfd</p>


            <br><br><br><br><br>
        
        </main>

        <aside class=" p-4 border-l-2">
            <li>okay</li>
            <li>faq</li>
        </aside>

    </div>


</body>

</html>