<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Certificate | {{$participant->name}}</title>
      @vite('resources/js/app.js' , 'vendor/courier/build')

      <style type="text/css">
            /* general settings */
            * {
                  margin:0;
                  padding:0
            }
            body {
                  /*  */
            }

            /* text */
            .name {
                  font-family: sans-serif;
            }
            
            .head_email{

            }
            .body_email{
                  /* text */
                  color: black;
                  font-size: 15px;
                  
                  /* position */
                  margin-top: 2rem;
            }
            .foot_email{
                  /* text */
                  color: black;
                  font-size: 15px;
            }
            .signature{
                  /* text */
                  color: black;
                  font-size: 15px;
            }
    </style>

</head>



<body>
      <div class="name">
            @if($participant->position === 'Peserta' || $participant->position === 'Semifinalist' || $participant->position === 'Finalist')
                  <h1 class="head_email">Dear {{ $participant->name }},</h1>
                  <p class="body_email">
                        {{-- Thank you for participating in our {{ $participant->competition }} Competition at NEO 2023. We truly appreciate that you have spent so much time in the competition this time. Keep up this diligent work and show your improvement over this in upcoming competitions! --}}
                        Thank you for joining The 2023 National English Olympics. This certificate marks your extraordinary journey throughout the event. We would like express our deepest gratitude for joining the battle for triumph. See you on the next National English Olympics!
                        <br><br>
                        We have also attached the certificate which you can access in this email. If you have further questions, please don’t hesitate to let us know.                  </p>
                  <p class="foot_email">
                        Thank you, and have a great day.
                  </p>
                  <br><br>
                  <p class="signature">
                        --<br>
                        Best Regards,<br>
                        The 2023 National English Olympics Committee<br>
                        Email   : neo.bnec@gmail.com<br>
                        <img src="https://neo.mybnec.org/storage/logo/NEO-FULL/Colored.png" width="200px">
                  </p>
            @elseif($participant->position === 'Liaison Officer')
                  <h1 class="head_email">Dear {{ $participant->name }},</h1>
                  <p class="body_email">
                        Thank you for joining The 2023 National English Olympics as a Liaison Officer. Your efforts have played a huge factor in the event's success. We look forward to working with you again in future endeavors.
                        <br><br>
                        We have also attached the certificate which you can access in this email. If you have further questions, please don’t hesitate to let us know.
                  <p class="foot_email">
                        Thank you, and have a great day.
                  </p>
                  <br><br>
                  <p class="signature">
                        --<br>
                        Best Regards,<br>
                        The 2023 National English Olympics Committee<br>
                        Email   : neo.bnec@gmail.com<br>
                        <img src="https://neo.mybnec.org/storage/logo/NEO-FULL/Colored.png" width="200px">
                  </p>
            @elseif($participant->position === 'Judges')
                  <h1 class="head_email">Dear {{ $participant->name }},</h1>
                  <p class="body_email">
                        Thank you for playing a huge part in the success of The 2023 National English Olympics. Your contributions and efforts are what have made this event possible. We look forward to working with you again in the next National English Olympics.
                        <br><br>
                        We have also attached the certificate which you can access in this email. If you have further questions, please don’t hesitate to let us know.
                  <p class="foot_email">
                        Thank you, and have a great day.
                  </p>
                  <br><br>
                  <p class="signature">
                        --<br>
                        Best Regards,<br>
                        The 2023 National English Olympics Committee<br>
                        Email   : neo.bnec@gmail.com<br>
                        <img src="https://neo.mybnec.org/storage/logo/NEO-FULL/Colored.png" width="200px">
                  </p>
            @elseif($participant->position === 'Panitia')
                  <h1 class="head_email">Dear {{ $participant->name }},</h1>
                  <p class="body_email">
                        Thank your for contributing your time and energy for The 2023 National English Olympics. Your hard work and dedication will be remembered as the factor of success for our event. This certificate is a sign of appreciation for your contribution. Stay extraordinary!
                        <br><br>
                        We have also attached the certificate which you can access in this email. If you have further questions, please don’t hesitate to let us know.
                  <p class="foot_email">
                        Thank you, and have a great day.
                  </p>
                  <br><br>
                  <p class="signature">
                        --<br>
                        Best Regards,<br>
                        The 2023 National English Olympics Committee<br>
                        Email   : neo.bnec@gmail.com<br>
                        <img src="https://neo.mybnec.org/storage/logo/NEO-FULL/Colored.png" width="200px">
                  </p>
            
            
            @endif
            
      </div>
</body>
</html>
