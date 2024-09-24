<!DOCTYPE html>
<html>

<head>
    <title>About Us - MindGym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
            /* Light grey background for a gym-like feel */
        }

        header {
            background: #2c3e50;
            /* Darker blue-grey for gym aesthetics */
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #34495e 1px solid;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #2980b9;
            /* Blue color for buttons */
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #1f618d;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-right: 20px;
            flex: 1;
        }

        .content p {
            flex: 2;
            max-width: 600px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <header>
            <h1 class="mb-4">About Us</h1>
        </header>

        <div class="container">
            <div class="content">
                <img src="https://cdn.prod.website-files.com/581c85345d7e0501760aa7db/614ac6f22c14bc72bfe2e629_150416-F-MZ254-009.jpeg"
                    alt="MindGym Interior">
                <p>Founded in 2020, MindGym has been a cornerstone in San Mateo Rizal for those seeking to improve their
                    health and wellness. Our mission is to provide a welcoming and inclusive space where individuals of
                    all fitness levels can come together to pursue their health goals. With over 4 years of experience,
                    our dedicated team is committed to offering the best in fitness and customer service. We believe in
                    not just building stronger bodies but also fostering a stronger community.</p>
            </div>

            <div class="content">
                <p>At MindGym, we pride ourselves on our state-of-the-art facilities and a wide range of fitness
                    programs designed to meet the needs of every individual. Whether you're a beginner looking to start
                    your fitness journey or an experienced athlete aiming to reach new heights, our gym offers a
                    supportive environment to help you achieve your goals. Our experienced trainers and friendly staff
                    are always on hand to provide guidance, motivation, and support. We offer various memberships and
                    flexible plans to ensure that everyone can find an option that suits their lifestyle and budget.
                    Join us at MindGym and become a part of a community dedicated to health, fitness, and overall
                    well-being. Experience the difference of working out in a space where your goals are our priority
                    and your success is our reward.</p>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
