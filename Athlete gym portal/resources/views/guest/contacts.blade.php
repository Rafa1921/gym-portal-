<!DOCTYPE html>
<html>

<head>
    <title>Contact Us - MindGym</title>
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

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .contact-info div {
            flex: 1;
            margin: 10px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            margin-top: 0;
        }

        .contact-info p {
            margin: 10px 0;
        }

        .contact-info img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <header>
            <h1 class="mb-4">About Us</h1>
        </header>

        <div class="container">
            <div class="contact-info">
                <div>
                    <h2>Gym Owner</h2>
                    <img src="https://assets.entrepreneur.com/content/3x2/2000/20150716195752-gym-onnit.jpeg?format=pjeg&auto=webp&crop=16:9"
                        alt="Owner Image">
                    <p><strong>Name:</strong> Preps</p>
                    <p><strong>Email:</strong> MindGym@gmail.com</p>
                    <p><strong>Phone:</strong> 09989786675</p>
                    <p>For any inquiries regarding the gym operations, membership details, or general questions, feel
                        free to reach out to our owner, Preps. He is committed to ensuring your experience at MindGym is
                        exceptional.</p>
                </div>

                <div>
                    <h2>Customer Support</h2>
                    <img src="https://thumbs.dreamstime.com/b/handwritten-text-showing-contact-us-business-fitness-health-concept-writing-customer-support-written-sticky-note-empty-paper-110699704.jpg"
                        alt="Support Team">
                    <p><strong>Email:</strong> support@mindgym.com</p>
                    <p><strong>Phone:</strong> (123) 456-7891</p>
                    <p>Our customer support team is here to assist you with any questions or concerns you may have
                        regarding your membership, class schedules, or facilities. Don't hesitate to contact us for
                        prompt assistance.</p>
                </div>

                <div>
                    <h2>Personal Trainers</h2>
                    <img src="https://www.glofox.com/wp-content/uploads/2021/02/shutterstock_2149264135-1024x683.jpg"
                        alt="Trainer Image">
                    <p><strong>Email:</strong> trainers@mindgym.com</p>
                    <p><strong>Phone:</strong> (123) 456-7892</p>
                    <p>Looking for personalized fitness guidance? Our team of expert personal trainers is here to help
                        you achieve your fitness goals. Contact us to schedule a session or to inquire about our
                        training programs.</p>
                </div>

                <div>
                    <h2>General Inquiries</h2>
                    <img src="https://www.lifehealth-fitness.com/images/headers/Contact_Us_alt_1488886301.jpg"
                        alt="General Inquiries">
                    <p><strong>Email:</strong> info@mindgym.com</p>
                    <p><strong>Phone:</strong> (123) 456-7893</p>
                    <p>For all other inquiries, including partnerships, collaborations, and general information, please
                        reach out to us via the email or phone number provided. We look forward to hearing from you!</p>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
