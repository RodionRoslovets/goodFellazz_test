<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goofFellazz
 */

get_header();
?>

<main>
      <section class="main" id="main">
        <div class="main-slider">
          <div class="main-slider__slide">
            <div class="container">
              <p>Бухгалтерские услуги <br>в Санкт-Петербурге</p>
              <button type="button">Наша презентация</button>
            </div>
          </div>
          <div class="main-slider__slide">
            <div class="container">
              <p>Бухгалтерские услуги <br>в Санкт-Петербурге</p>
              <button type="button">Наша презентация</button>
            </div>
          </div>
          <div class="main-slider__slide">
            <div class="container">
              <p>Бухгалтерские услуги <br>в Санкт-Петербурге</p>
              <button type="button">Наша презентация</button>
            </div>
          </div>
          <div class="main-slider__slide">
            <div class="container">
              <p>Бухгалтерские услуги <br>в Санкт-Петербурге</p>
              <button type="button">Наша презентация</button>
            </div>
          </div>
        </div>
        <div class="main-slider__navigation container d-flex justify-content-between">
          <div class="main-slider__dots"></div>
          <div class="main-slider__arrows"></div>
        </div>
      </section>
      <section class="services" id="services">
        <div class="container">
          <h2 class="small-heading">Наши услуги</h2>
          <p class="big-heading">Мы специализируемся</p>
          <div class="services-row row">
            <div class="col-md-4">
              <div class="service"><a href="#">Бухгалтерское обслуживание</a></div>
            </div>
            <div class="col-md-4">
              <div class="service"><a href="#">Бухгалтерское обслуживание</a></div>
            </div>
            <div class="col-md-4">
              <div class="service"><a href="#">Бухгалтерское обслуживание</a></div>
            </div>
            <div class="col-md-4">
              <div class="service"><a href="#">Бухгалтерское обслуживание</a></div>
            </div>
            <div class="col-md-4">
              <div class="service"><a href="#">Бухгалтерское обслуживание</a></div>
            </div>
            <div class="col-md-4">
              <div class="service"><a href="#">Бухгалтерское обслуживание</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="small-heading">О нас</h2>
          <div class="row">
            <div class="about__left col-md-6">
              <p class="big-heading">Компания <span class="big-heading_blue">ИвановПром</span></p>
              <p class="about__text">
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала 
                XVI века. В то время некий безымянный печатник создал большую коллекцию 
                размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. 
                Lorem Ipsum не только успешно пережил без заметных изменений пять веков, 
                но и перешагнул в электронный дизайн.
              </p>
            </div>
            <div class="about__right col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="about__case">
                    <p class="case__count">90</p>
                    <p class="case__text">Завершено крупных сделок</p><a href="#">Все кейсы</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about__case">
                    <p class="case__count">90</p>
                    <p class="case__text">Завершено крупных сделок</p><a href="#">Все кейсы</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about__case">
                    <p class="case__count">90</p>
                    <p class="case__text">Завершено крупных сделок</p><a href="#">Все кейсы</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about__case">
                    <p class="case__count">90</p>
                    <p class="case__text">Завершено крупных сделок</p><a href="#">Все кейсы</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="clients" id="clients">
        <div class="container">
          <h2 class="small-heading">Наши клиенты</h2>
          <p class="big-heading">С нами работают</p>
          <div class="clients__slider"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/microsoft.png" alt="microsoft logo"></div>
          <div class="clients__slider-navigation d-flex justify-content-between align-items-end">
            <div class="clients__slider-dots"></div>
            <div class="clients__slider-arrows"></div>
          </div>
        </div>
      </section>
      <section class="feedback">
        <div class="container">
          <h2 class="small-heading">Отзывы</h2>
          <p class="big-heading">Ваши благодарности</p>
          <div class="feedback__slider">
            <div class="feedback__slide">
              <p>
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для 
                текстов на латинице с начала XVI века. В то время некий безымянный 
                печатник создал большую коллекцию размеров и форм шрифтов, используя 
                Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", 
                часто используемый в печати и вэб-дизайне.
              </p>
              <div class="feedback__author d-flex align-items-center">
                <div class="feedback__author-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/img/user.png" alt="user avatar"></div>
                <div class="feedback__author-name">
                  <p>Екатерина Иванова</p>
                  <p class="feedback__author-function">Директор ООО “Раз-два”</p>
                </div>
              </div>
            </div>
            <div class="feedback__slide">
              <p>
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для 
                текстов на латинице с начала XVI века. В то время некий безымянный 
                печатник создал большую коллекцию размеров и форм шрифтов, используя 
                Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", 
                часто используемый в печати и вэб-дизайне.
              </p>
              <div class="feedback__author d-flex align-items-center">
                <div class="feedback__author-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/img/user.png" alt="user avatar"></div>
                <div class="feedback__author-name">
                  <p>Екатерина Иванова</p>
                  <p class="feedback__author-function">Директор ООО “Раз-два”</p>
                </div>
              </div>
            </div>
            <div class="feedback__slide">
              <p>
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для 
                текстов на латинице с начала XVI века. В то время некий безымянный 
                печатник создал большую коллекцию размеров и форм шрифтов, используя 
                Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", 
                часто используемый в печати и вэб-дизайне.
              </p>
              <div class="feedback__author d-flex align-items-center">
                <div class="feedback__author-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/img/user.png" alt="user avatar"></div>
                <div class="feedback__author-name">
                  <p>Екатерина Иванова</p>
                  <p class="feedback__author-function">Директор ООО “Раз-два”</p>
                </div>
              </div>
            </div>
            <div class="feedback__slide">
              <p>
                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для 
                текстов на латинице с начала XVI века. В то время некий безымянный 
                печатник создал большую коллекцию размеров и форм шрифтов, используя 
                Lorem Ipsum для распечатки образцов. Lorem Ipsum - это текст-"рыба", 
                часто используемый в печати и вэб-дизайне.
              </p>
              <div class="feedback__author d-flex align-items-center">
                <div class="feedback__author-avatar"><img src="<?php echo get_template_directory_uri() ?>/assets/img/user.png" alt="user avatar"></div>
                <div class="feedback__author-name">
                  <p>Екатерина Иванова</p>
                  <p class="feedback__author-function">Директор ООО “Раз-два”</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feedback-slider__navigation d-flex justify-content-between align-items-end">
            <div class="feedback-slider__dots"></div>
            <div class="feedback-slider__arrows"></div>
          </div>
        </div>
      </section>
      <section class="form" id="form">
        <div class="container">
          <div class="row">
            <div class="col-md-6 contacts">
              <p class="big-heading">Связь с нами</p>
              <p class="form-questions">У вас остались вопросы? Напишите нам - мы ответим в ближайшее время!</p>
              <div class="d-md-flex justify-content-between">
                <div class="form__contacts d-flex">
                  <div class="form__contacts-icon">
                    <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.4011 0H2.02629C0.912 0 0 0.911143 0 2.02629V27.9729C0 29.088 0.912 30 2.02629 30H15.4011C16.5154 30 17.4274 29.0897 17.4274 27.9737V2.02629C17.4274 0.911143 16.5154 0 15.4011 0ZM6.57429 1.46057H10.8531C10.9886 1.46057 11.0983 1.57029 11.0983 1.70657C11.0983 1.842 10.9886 1.95171 10.8531 1.95171H6.57429C6.43886 1.95171 6.32914 1.842 6.32914 1.70657C6.32914 1.57029 6.43886 1.46057 6.57429 1.46057ZM8.71371 28.9869C8.154 28.9869 7.70057 28.5334 7.70057 27.9729C7.70057 27.4123 8.154 26.9597 8.71371 26.9597C9.27343 26.9597 9.72686 27.4123 9.72686 27.9729C9.72686 28.5334 9.27343 28.9869 8.71371 28.9869ZM16.0174 26.25H1.41V3.21343H16.0174V26.25Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="form__contacts-link"><a href="tel:+71112223344">+7 (111) 222-33-44</a></div>
                </div>
                <div class="form__contacts d-flex">
                  <div class="form__contacts-icon">
                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34.6085 0H4.82055C2.1615 0 0 2.1615 0 4.82055V25.1794C0 27.8385 2.1615 30 4.82055 30H34.6003C37.2594 30 39.4209 27.8385 39.4209 25.1794V4.82871C39.429 2.16966 37.2675 0 34.6085 0ZM37.2268 25.1794C37.2268 26.6232 36.0522 27.7977 34.6085 27.7977H4.82055C3.37684 27.7977 2.20228 26.6232 2.20228 25.1794V4.82871C2.20228 3.38499 3.37684 2.21044 4.82055 2.21044H34.6003C36.044 2.21044 37.2186 3.38499 37.2186 4.82871V25.1794H37.2268Z" fill="white"></path>
                      <path d="M24.8612 14.7472L34.5023 6.10121C34.951 5.69338 34.9917 5.00006 34.5839 4.54329C34.1761 4.09468 33.4828 4.0539 33.026 4.46173L19.7307 16.3948L17.1369 14.0784C17.1288 14.0702 17.1206 14.0621 17.1206 14.0539C17.0635 13.9968 17.0064 13.9479 16.9412 13.8989L6.38651 4.45357C5.92974 4.04574 5.23643 4.08652 4.8286 4.54329C4.42077 5.00006 4.46156 5.69338 4.91833 6.10121L14.6736 14.8206L4.95911 23.9152C4.51865 24.3312 4.49418 25.0245 4.91017 25.4732C5.1304 25.7015 5.42403 25.8239 5.71767 25.8239C5.98684 25.8239 6.25601 25.726 6.46808 25.5303L16.3294 16.3051L19.0048 18.695C19.2169 18.8826 19.4779 18.9723 19.7389 18.9723C19.9999 18.9723 20.2691 18.8745 20.473 18.6869L23.2218 16.2236L33.026 25.5384C33.2381 25.7423 33.5154 25.8402 33.7846 25.8402C34.0782 25.8402 34.3637 25.726 34.5839 25.4976C34.9999 25.0572 34.9836 24.3557 34.5431 23.9397L24.8612 14.7472Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="form__contacts-link"><a href="mailto:order@bu-one.ru">order@bu-one.ru</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="11" title="Контактная форма 1"]')?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_sidebar();
get_footer();
