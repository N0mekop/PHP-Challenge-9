<form action="/thanks.php" method="post">
  <div>
    <label for="lastname">Nom :</label>
    <input type="text" id="lastname" name="user_last_name">
  </div>
  <div>
    <label for="firstname">Prénom :</label>
    <input type="text" id="firstname" name="user_first_name">
  </div>
  <div>
    <label for="email">E-mail :</label>
    <input type="email" id="email" name="user_mail">
  </div>
  <div>
    <label for="tel">Téléphone :</label>
    <input type="tel" id="tel" name="user_tel">
  </div>
  <div>
    <label for="subject">Sujet</label>
    <div>
      <select id="subject" name="subject">
        <option value="choix1">Sujet1</option>
        <option value="choix2">Sujet2</option>
        <option value="choix3">Sujet3</option>
      </select>
    </div>
  </div>
  <div>
    <label for="message">Message :</label>
    <textarea id="message" name="user_message"></textarea>
  </div>
  <div class="button">
    <button type="submit">Envoyer votre message</button>
  </div>
</form>