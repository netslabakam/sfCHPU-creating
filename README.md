# sfCHPU-creating
создание чпу на symfony 1.4 doctrine

ПОШАГОВО

Создал бд через DOCTRINE -- ../online/config/doctrine/schema.yml</h1>
<h4>
ChpuMain:</br>
  actAs: { Timestampable: ~ }</br>
  columns:</br>
    url: { type: string(255), notnull: true, unique: true } </br>
    short: { type: string(255), notnull: true, unique: true }</br>
    expires_at:   { type: timestamp, notnull: true }</br>
</h4>
<h1>Добавил описания к таблицам -- ../online/data/fixtures/sites.yml</br></h1>
<h4>
ChpuMain:</br>
  symfony:</br>
    url: http://www.sensio-labs.com/</br>
    short: fabien.potencier@example.com</br>
    </h4>

<h1>Создал приложение Frontend и в нем модуль CHPU -- ../online/apps/frontend/modules/chpu

Добавил РОУТИНГ -- ../online/apps/frontend/config/routing.yml</h1>

<h4>
chpu_show:</br>
  url:   chpu/:short_slug/:id</br>
  class: sfDoctrineRoute</br>
  options:</br>
    model: ChpuMain</br>
    type: object</br>
  param:</br>
    module: chpu</br>
    action: show</br>
  requirements:</br>
    id: \d+</br>
    sf_method: [GET]</br>
    </h4>
    
<h1> Убрал не понятные символы из новой ссылки ../lib/ChpuMain.class.php</h1>
 <h4>
 static public function slugify($text) </br>
    {</br>
        // replace all non letters or digits by -</br>
        $text = preg_replace('/\W+/', '-', $text);</br>
</br>
        // trim and lowercase</br>
        $text = strtolower(trim($text, '-'));</br>
</br>
        return $text;</br>
    }</br>
    </h4>
 
<h1> Изменил вывод страницы после создания ссылки ../online/apps/frontend/modules/chpu/templates/showSuccess.php </h1>
  <h4>
 <div class="container align-items-center justify-content-center "></br>
<!--    <h1>--><?php //echo $chpu->getUrl() ?><!--</h1>--></br>
    <h1>Ваша ссылка <?php echo $_SERVER['REQUEST_URI'] ?></h1></br>
    <h2>Пройти по ссылке</br>
        <a href="<?php echo $chpu->getUrl() ?>" class="btn btn-outline-dark" >Перейти</a></br>
    </h2></br>
</div></br>
</h4>

<h1>Доделал роутинг, что бы действие отладки красивой ссылки работало ../online/apps/frontend/modules/chpu/actions/actions.class.php</h1>
<h4>
public function executeShow(sfWebRequest $request)</br>
  {</br>
      $this->chpu = $this->getRoute()->getObject();</br>
  }</br></h4>
  <h1> Установил и встроил sfDoctrineGuardPlugin </h1>
  
