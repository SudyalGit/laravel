<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-weight: 600;
        }
        a{
            color: skyblue;
            text-decoration: none;
        }
        header{
            display: flex;
            flex-direction: column;
            margin-bottom: 2rem;
        }
        button{
            padding: 2px 4px;
        }
        .active{
            color: red;
        }
        .job-card-container{
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
        }
        .job-card{
            border: 1px solid rgb(255, 0, 0);
            padding: 1rem;
        }
        .red{
         color: red   
        }
        .small-text{
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <header>
        <x-navlink :active="request()->is('/')" href="/">Home</x-navlink>
        <x-navlink :active="request()->is('jobs')" href="/jobs">Jobs</x-navlink>
        <x-navlink :active="request()->is('jobs/create')" href="/jobs/create">Create</x-navlink>
    </header>
    <div>
        {{ $slot }}
    </div>
</body>

</html>
