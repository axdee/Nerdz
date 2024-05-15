<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
<?php
function renderCard($title, $content) {
    return "
    
    <div class='container'>
      <div class='row mb-4'>
        <div class=''>
          <div class='card'>
            <img class='card-img' src='https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png' alt='Vans'>
            <div class='card-img-overlay d-flex justify-content-end'>
              <a href='#' class='card-link text-danger like'>
                <i class='fas fa-heart'></i>
              </a>
            </div>
            <div class='card-body'>
              <h4 class='card-title'>{$title}</h4>
             
              <p class='card-text'>{$content}</p>
              <div class='buy d-flex justify-content-between align-items-center'>
                <div class='price text-success'><h5 class='mt-4'>$125</h5></div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
";
}

function renderCardGrid($cards) {
  $output = "<div class='container'><div class='row'>";
  $counter = 0;

  foreach ($cards as $card) {
      if ($counter % 3 == 0 && $counter != 0) {
          $output .= "</div><div class='row'>";
      }
      $output .= "<div class='col-md-4'>" . renderCard($card['title'], $card['content']) . "</div>";
      $counter++;
  }

  $output .= "</div></div>"; // Close the last row and container
  return $output;
}
?>