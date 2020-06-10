<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Rozor Telegram bots</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" </head> <body> -->

  <div class="container mx-auto">
    <div class="content-center">
      <div class="text-5xl text-center mt-2">Telegram Message Bot</div>
      <div class="w-auto mt-8 mx-auto">
        <!-- <div i></div> -->
        <form method="post" action="sendMessage.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="TelegramID">
              Telegram ID
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telegramid" type="number" name="telegram_id" placeholder="Telegram ID">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Message">
              Message
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="message" type="text" name="message_text" placeholder="Custom Text Message">
            <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
          </div>
          <div class="flex items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Send
            </button>
            <!-- <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a> -->
          </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 Rozor Corp. All rights reserved.
        </p>
      </div>
    </div>
    <!-- <div class="content">
      <section class="content-header">
        <i class="fa fa-home"></i> Home / <i class="fa fa-dashboard"></i> Dashboard / <b>wadagizig</b>
      </section>
      <div class="row">
        <div class="col-md-4">
          <div class="box box-solid box-primary">
            <div class="box-header">
              <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
            </div>

            <div class="">
              <form method="post" action="sendMessage.php">
                <div class="">
                  <label class="text-center">Telegram ID</label>
                  <div class="">
                    <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="number" name="telegram_id" placeholder="Telegram ID">
                    <!-- <input type="text" class="form-control" name="telegram_id" placeholder="Telegram ID"> -->
    <!-- </div>
                </div>
                <div class="">
                  <label class="">Messages</label>
                  <div class="">
                    <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="number" name="message_text" placeholder="Custom Text Message">
                    <!-- <input type="text" class="form-control" name="message_text" placeholder="Custom Text Message"> -->
    <!-- </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary pull-right">Send <i class="fa fa-send"></i></button> -->
  </div>


  </body>

</html>