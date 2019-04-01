<h1>Shareboards</h1>
<h3>PHP7 Application</h3>

<p>Basic Object Oriented PHP App in which you can create and share your favourite web links, with login/verification functions and encripted password.</p>

<h3>initial database: shareboards</h3>
<ul><h4>table: shares</h4>
  <li>id          INT (AUTO_INCREMENT)</li>
  <li>user_id     INT</li>
  <li>title       VARCHAR</li>
  <li>body        TXT</li>
  <li>link        VARCHAR</li>
  <li>create_date datetime (CURRENT_TIMESTAMP)</li></ul>
  
<ul><h4>table: user</h4>
  <li>id            INT (AUTO_INCREMENT)</li>
  <li>name          VARCHAR</li>
  <li>email         VARCHAR</li>
  <li>password      VARCHAR</li>
  <li>register_date datetime (CURRENT_TIMESTAMP)</li></ul>
  
  <h3>To do:</h3>
  <ul>
  <li>improve design</li>
  <li>add different content type</li>
  <li>add sort function</li>
  </ul>
