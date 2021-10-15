<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index">
	<link rel="stylesheet" href="Foreign languages.css">
    
    <link href="..\Icons\icon.png" rel="shortcut icon" type="images/x-icon"/>
	<title>Welcome languages</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>
    <?php
        $attrmenu=array("dropdown-toggle","data-toggle=dropdown","Языки");
        $vypad= array("Английский язык","Speaking club","Французский язык","Немецкий язык","Польский язык","Чешский язык");
        require_once "../Detals/nav and header.php";
    ?>
    <main>

        <div class="fathlang">
        <div class="lang col-xs-10 col-sm-11 col-md-10 col-lg-3" id="lang1">
            <div>
                <span>Английский язык</span>    
            </div>
        </div>
        <div class="lang col-xs-10 col-sm-11 col-md-10 col-lg-3" id="lang2">
            <div>
                <span>Speaking club</span>
            </div>       
        </div>
        <div class="lang col-xs-10 col-sm-11 col-md-10 col-lg-3" id="lang3">
            <div>
                <span>Французский язык</span>
            </div>
        </div>
        <div class="infomenu">
            <div class="pict"><img src="../Icons/xxx.png" alt=""></div>
            <h3 style="text-align: center;color:#593E81;"></h3>
            <div class="info-text">
                <h4>Индивидуальное изучение английского</h4>
                <p>Эта форма обучения очень подходит для занятых людей, людей с временным лимитом для освоения языка и отличается более гибким графиком занятий. У индивидуальных занятий есть свои положительные и отрицательные стороны.</p>

                <h5>Преимущества индивидуального обучения</h5>
                <ol>
                    <li><strong>Индивидуальная программа обучения.</strong>
                        <p>. Преподаватель при составлении программы обучения обязательно учтёт все ваши пожелания и особенности. В итоге курс обучения будет включать те темы, которые вам интересны, и проблемы, которые вы хотите разобрать.</p>
                    </li>
                    <li><strong>Гибкий график.</strong>
                        <p>Вы выбираете время и длительность занятий. Гибкость графика дает вам возможность самому планировать ваше время, что является важным фактором для занятых людей.</p>
                    </li>
                </ol>

                <h5>Минусы индивидуального обучения</h5>
                <ol>
                    <li><strong>Трудность в преодолении языкового барьера</strong>
                        <p>Привыкнув общаться на английском только с преподавателем, в дальнейшем при общении с незнакомыми людьми у вас могут возникать трудности из-за страха общения. Языковой барьер можно разрушить, только общаясь с большим количеством людей.</p>
                    </li>
                    <li><strong>Сложность в понимание английской речи. </strong>
                        <p>. Слушая одного человека, вы привыкаете к его произношению. Так как занятия проходят с преподавателем, то, скорее всего, произношение у него хорошее, и он старается говорить вам слова понятно. В реальной жизни у всех людей произношение разное. И никто не будет специально выговаривать слова для вас.</p>
                    </li>
                    <li><strong>Высокая стоимость обучения.</strong>
                        <p>. Индивидуальные занятия обходятся недешево. Такие ваши пожелания, как гибкость графика, несомненно, отразятся на стоимости уроков.</p>
                    </li>
                    <li><strong>Низкий уровень дисциплины. </strong>
                        <p>Легко отменяются занятия, мало, кто заканчивает учебный курс из-за частых отмен, переносов. Цель, как правило, не достигается.</p>
                    </li>
                </ol>
                <div id="pars2">
                    <div>
                    <h4>Занятия английским в паре</h4>
                    <h5>За:</h5>
                    <ol>
                        <li>Можно читать тексты по ролям, строить диалоги в паре.</li>
                        <li>Есть минимальная возможность общения.</li>
                        <li>Внимание преподавателя не рассеивается на большое количество учеников.</li>
                        <li>Комфортная цена.</li>
                        <li>Конкуренция. Это - дополнительная мотивация заниматься и не отставать от напарника.</li>
                    </ol>
                    <h5>Важно:</h5>
                    <p>Мы стараемся подбирать учеников в пару согласно уровню владения языком, их характеру, темпераменту и интересам!</p>
                    </div>
                </div>
                <h4>Групповые занятия</h4>

                <h5>Преимущества групповых занятий</h5>
                <ol>
                    <li><strong>Низкая стоимость занятий.</strong>
                        <p>Уроки в группе намного дешевле занятий один на один с преподавателем. 1 час индивидуальных занятий дороже групповых примерно в 4-5 раз. И за эти деньги вы получаете во столько же раз больше практики.</p>
                    </li>
                    <li><strong>Легко преодолеть языковой барьер.</strong>
                        <p>В группе у вас появляется возможность общения. Ведь язык нам нужен именно для этого. И общаться мы хотим со всем миром, а не только с одним человеком. Занятия в группе часто намного динамичнее и разнообразнее. На них вы получаете много разговорной практики, так как общаетесь с разными людьми. Поэтому в реальной жизни при общении с незнакомыми людьми у вас не возникнет трудностей и страха общения.</p>
                    </li>
                    <li><strong>Улучшение навыка понимания иностранной речи.</strong>
                        <p>В группе вы общаетесь с разными людьми. Во время общения вы не только улучшаете разговорный навык, но и учитесь понимать произношение разных людей. Благодаря этому за границей вы намного быстрее адаптируетесь к произношению именно тех людей, которые там живут. И чем больше вы будете общаться и слушать, тем легче вы будете понимать речь.</p>
                    </li>
                    <li><strong>Конкуренция внутри группы.</strong>
                        <p>Это - дополнительная мотивация заниматься и не отставать от других. Репетитор может пойти на уступки и простить нехватку времени и несделанное домашнее задание (ведь это вы платите ему деньги). Но занимаясь в группе, вам просто не захочется чувствовать себя хуже остальных. Вы будете выполнять все задания, даже если вам лень или не хватает времени. Ведь осознание того, что вы отстаете от остальных людей, будет неприятно в первую очередь именно вам.</p>
                    </li>
                    <li><strong>Регулярность занятий.</strong>
                        <p>Репетитору можно позвонить и отменить занятие - очень удобно. Так можно сделать один, два, три раза подряд, а потом и вовсе забыть о том, что такое английский. В группе так не получится, регулярный график будет отличным стимулом не пропускать.</p>
                    </li>
                    <li><strong>Приятное времяпрепровождение. </strong>
                        <p>Наконец, группа — это просто возможность пообщаться, встретить интересных людей, завести друзей.</p>
                    </li>
                </ol>
                <img src="..\Pictures\eng2.jpg" id="eng2" alt="">
                <h5>Минусы обучения английского в группе</h5>
                <ol>
                    <li><strong>Особенности характера.</strong>
                        <p>Некоторые люди слишком стеснительные, им сложно общаться с большим количеством незнакомых людей, и они некомфортно чувствуют себя на групповых занятиях. Но именно таким людям, занимаясь в группе, можно догнать сразу двух зайцев: и английский выучить, и преодолеть страх общения. Ведь в любом случае язык мы учим именно для того, чтобы общаться на нем.</p>
                    </li>
                    <li><strong>Отсутствие индивидуальной программы. </strong>
                        <p>Занимаясь в группе, вы будете проходить только то, что предусмотрено в программе. С одной стороны, это хорошо, так как в основном проходятся самые популярные темы, которые нужны для жизни. С другой стороны, у вас не будет возможности самому выбрать тему, интересную именно вам.</p>
                    </li>
                    <li><strong>Непонимание материала. </strong>
                        <p>У всех людей разная способность к обучению. Одним хватает услышать что-то один раз, и они схватывают на лету. Другим нужно разбираться и осмысливать информацию чуть дольше. Занимаясь в группе, некоторые люди боятся переспрашивать что-либо у преподавателей, если они не поняли или упустили какой-то момент. Из-за этого материал может плохо усвоиться. Какой вариант лучше выбрать? Если вы очень занятой человек, работаете по сменам и не можете ходить в группу по определенному расписанию, то для вас подойдет только индивидуальное обучение. Но это выйдет дороже в несколько раз. В остальных случаях лучше ходить в группу, так как именно там лучше всего развиваются навыки английского. Вы не только улучшите понимание речи и разговорный навык, но и сможете легко и быстро сломать барьер. Особенно этот способ хорошо подойдет тем, кто уже учил английский ранее (в школе, например), но ничего не помнит или забыл.</p>
                    </li>
                </ol>
            </div>
         
        <div class="info-text">
            <p>Всем известно, что помимо теории, очень важную часть в изучении иностранного языка занимает практика, но не все знают с чем это связанно. Мы расскажем о том, почему посещать разговорные клубы — это так важно.</p>
            <img style="width: 100%;height: 10%;box-shadow: 0px 0px 10px #593E81" src="../Pictures/speakingtime.jpg" alt="">
            <p>Рассмотрим основные плюсы разговорной практики в изучении иностранного языка. </p>
            <ul id="ulspeak">
                <li>Применение знаний на практике
                    <p>В первую очередь, посещение разговорного клуба дает ребенку возможность потренировать то, что он выучил на уроке английского с учителем, вне класса, в процессе живого общения. Даже занимаясь с учителем индивидуально, ученик получает не так много практики, как хотелось бы. Кроме того, на уроках обычно отрабатывается одна определенная тема, а на занятиях Speaking Club происходит некое обобщение знаний, приходится вспоминать не только материал последнего урока, но и всё, что выучил когда-то.</p>
                </li>
                <li>Развитие уверенности в себе
                    <p>Каждый, кто учит иностранный язык знает, как сложно заговорить, например, в путешествии, когда нужно всего лишь спросить цену в магазине или дорогу на улице — хотя на уроке с учителем говорить получалось вполне свободно. Дело не только в языковом барьере, дело в привычке к общению с новыми людьми на иностранном языке.</p>
                </li>
                <li>Умение понимать собеседника
                    <p>Учитель — это человек, к которому вы привыкли. Вы привыкли именно к его акценту, уверены, что учитель ,скорее всего вас поймёт, даже если вы ошибётесь и поправит ошибку. Всё это создает ситуацию уверенности, которая пропадает, когда меняется собеседник.</p>
                    <p>У каждого собеседника свои тембр голоса и скорость речи, поэтому важно разнообразить круг своего общения и адаптироваться к общению в разных условиях. Посещая уроки Speaking Club, Вы знакомитесь с разными людьми, а значит, тренируетесь общаться на английском языке без стеснения.</p>
                </li>
                <li>Механизм изучения языков
                    <p>В самом юном возрасте малыш сначала начинает разговаривать, а только затем — читать и писать. При изучении второго и последующих иностранных языков этот механизм меняется: ребенок использует полученные ранее навыки для восприятия информации, однако ключевой момент остается неизменным — произношение является самым главным критерием успешного владения языком.</p>
                </li>
                <li>Непроизвольная и произвольная память
                    <p>Произвольная память — это преднамеренное запоминание необходимого материала. Произвольная память очень хорошо поддается тренировкам, особенно в школьном возрасте, но большую часть информации ребенок все равно усваивает непроизвольным путем. Разговорная практика иностранного языка — это отличный пример непроизвольного запоминания, ведь при произношении слов их запоминаемость выше на 70%, чем при их прочтении или восприятии на слух.</p>
                    <p>В сочетании с изучением теории, общение поможет достичь Вам наилучших результатов в изучении английского языка!</p>
                </li>
            </ul>
            <p><strong>Большинство наших гостей приходит в Разговорный Клуб Английского Языка, чтобы преодолеть языковой барьер. А когда он преодолен – они остаются с нами, чтобы практиковаться в английском и… просто общаться :)</strong></p>
        </div>
        
        <div class="info-text">
            <p>Решили выучить французский язык? На французском языке говорят в более 43 стран мира. Многие считают этот язык самым красивым.</p>
            <p>Какие еще причины для изучения французского языка?</p>
            
            <p>- Для поклонников хорошей литературы - Франция имеет наибольшее количество Нобелевских призеров в этой области.</p>
            <p>- Францию посещают более 60 млн. туристов ежегодно - вам не будет скучно.</p>
            <p>- Франция знаменита качеством своих высоких технологий, и французский является важным языком технологий и бизнеса в мире. (Второй язык в интернете.)Более 50 тыс. английских слов имеют французское происхождение. Большое их количество и в русском языке.</p>
            <img src="../Pictures/franch_lang.jpg" style="width:100%" alt="">
            <p>- Франция предлагает огромное количество щедрых стипендий для наших выпускников.</p>
            <p>- Французский язык - это второй по популярности язык после английского для обучения.</p>
            <p>-Французский язык - один из двух официальных языков Олимпийских игр.</p>
            <p>- Франко-говорящая Африка представляет собой бо́льшую территорию, чем США.Montréal - второй по величине франко-говорящий город в мире.</p>
            <p>- Не забываем про шедевры музыки и кино!</p>

            <p>Наверняка, вы нашли что-нибудь интересное на этой странице, поэтому скорее к нам изучать этот красивейший язык!</p>
        </div>
        </div>

        <div class="lang col-xs-10 col-sm-11 col-md-10 col-lg-3" id="lang4">
            <div>
                <span>Немецкий язык</span>
            </div>
        </div>
        <div class="lang col-xs-10 col-sm-11 col-md-10 col-lg-3" id="lang5">
            <div>
                <span>Польский язык</span>
            </div> 
        </div>
        <div class="lang col-xs-10 col-sm-11 col-md-10 col-lg-3" id="lang6">
            <div>
                <span>Чешский язык</span>
            </div>
        </div>
        <div class="infomenu">
            <div class="pict"><img src="../Icons/xxx.png" alt=""></div>
            <h3 style="text-align: center;color:#593E81;"></h3>
            <div class="info-text">
                <p>Немецкий язык - это родной язык для более чем 90 миллионов человек. Они, в основном, проживают в Гермсании, Австрии и Швейцарии. Также на немецком говорят в Бельгии, Лихтенштейне, Северной Италии и Люксембурге. Кроме людей, для которых немецкий родной язык, есть еще 80 миллионов, которые понимают по-немецки. Немецкий язык - один из самых изучаемых иностранных языков во всем мире. Как английский и голландский, он является одним из западногерманских языков. Но на него также в течение многих столетий оказывали влияние другие языки. Это объясняется тем, что языковое пространство находится в центре Европы. В настоящее время в немецкую лексику особенно интегрируются английские термины. Другой отличительной чертой немецкого языка являются многие разные диалекты. Однако их значение уменьшается все больше и больше. Прежде всего через средства массовой информации литературный язык получает все более широкое распространение. Во многих школах поэтому снова хотят преподавать диалекты.</p>

                <img src="../Pictures/german.jpg" style="width: 100%" alt="">

                <p>Грамматика немецкого не совсем легкая, но усилия окупятся с лихвой! Потому что немецкий входит в десятку основных языков мира ...</p>

                <p>Учить немецкий для начинающих с клубом «WELCOME» - это эффективный способ выучить немецкий. Все наши учебные материалы доступны онлайн.  С нашим курсом Вы сможете успешно выучить немецкий! Уроки четко структурированы, благодаря чему Вы гарантированно достигните цели. С помощью 100 уроков, разбитых по темам, вы быстро выучите новый язык. К уроку прилагается аудиофайлы в формате MP3, которые были записаны носителями языков. Они помогают лучше выучить произношение. Уже начинающие изучать немецкий благодаря предложениям, близкими к реальной ситуации, могут эффективно заговорить по-немецки.</p>
                
                <img src="../Pictures/german_lang.jpg" style="float: left" alt="">
                <p>Сначала вы знакомитесь с основными структурами языка. Диалоги в виде примеров помогут вам выразить мысль на иностранном языке. Наличие предварительных знаний не требуется. Также те, у кого уже есть определенные знания языка, могут повторить и закрепить выученный материал. Для изучения предлагаются только правильные, часто произносимые фразы, которые сразу же можно применять в жизни. Вы сможете общаться на иностранном языке в повседневных ситуациях. Найдите время за обеденным перерывом, или когда стоите в пробке, чтобы несколько минут поучить немецкий. Вы учитесь как в дороге, так и дома. Вы остаётесь мобильными, и с вами всегда есть под рукой немецкий.
                Все аудиофайлы доступны в формате MP3 для бесплатного скачивания.</p>
            </div>

            <div class="info-text">
                <p>Польский язык относится к западнославянским языкам. Это родной язык для более чем 45 миллионов человек. Они живут в основном в Польше и в нескольких странах Восточной Европы. Польские переселенцы использовали свой язык также и на других континентах. Так, в мире насчитывается около 60 миллионов человек, которые говорят на польском языке. Таким образом, после русского языка это наиболее широко распространенный славянский язык. Польский язык близок чешскому и словацкому. Современный польский литературный язык возник из разных диалектов. Сегодня вряд ли найдутся диалекты, так как большинство поляков используют литературный язык. Польский алфавит использует латинские буквы, их в польском алфавите 35. Ударение в польском всегда падает на предпоследний слог слова. В грамматике есть семь падежей и три рода. Почти каждое окончание слова, таким образом, склоняется или спрягается. Поэтому польский считается не совсем самым простым языком... Но вскоре он станет одним из основных языков Европы!</p>
                <img id="policimg" src="../Pictures/polski.jpg" class="col-xs-12 col-sm-12 col-md-5 col-lg-5"  alt="">
                <img src="../Pictures/polski_jazyk.webp" class="col-xs-12 col-sm-12 col-md-5 col-lg-5" alt="">
                <p>Помимо туристических возможностей, изучение польского языка откроет для вас шедевры польской литературы в оригинале, такие как «Пан Тадеуш» Адама Мицкевича или «Куда идёшь» Генрика Сенкевича, а также классику музыки и кино. Изучающие польский язык могут получить бесплатное образование в Польше. Специальные условия для граждан России, Беларуси и Украины позволяют работать в Польше до 6 месяцев без специального разрешение.</p>

                <p>Онлайн-уроки рассчитаны на практическое овладение навыками разговорной речи.</p>
                <p>Занятия проводятся по Skype носителями языка</p>
            </div>

            <div class="info-text">
                <p>Изучение чешского языка, на котором говорят около 11 млн. чел., откроет вам доступ не только к одному из древних славянских языков, но и к бесплатному высшему образованию в Чехии, а также к одному из многообещающих рынков Восточной Европы.</p>
                <img src="../Pictures/czech img.jpg" style="width: 100%" alt="">
                <p>Получение высшего образования и др. остается на ваше усмотрение, клуб WELCOME же поможет вам с получением базовых знаний чешского языка, языка, который еще два столетия назад находился на грани вымирания под давлением немецкого языка, но, как и иврит, был возрожден группой энтузиастов.
                Целью наших уроков является научить студентов общаться на бытовые темы, читать и понимать нетрудные чешские тексты, и написать простое письмо, поздравление и т.п. Особенностью данного курса является ориентированность на русскоязычных студентов с соответствующей общеславянской лексикой.</p>
                <p>Для лингвиста чешский язык будет интересен значительным количеством германской лексики (помимо славянской); обилием синонимов (например, для слова "девочка": holka, holčina, holčička, dívka, děvče, děvečka, děvenka, děvucha, dívčička, dívenka, dcerka, žába, žabka); диглоссией, означающей большую разницу между письменным языком и разговорным, эта разница используется говорящим для различных стилистических целей.</p>
                <p>Изучающие литературу откроют для себя богатую литературную культуру, особенно в в поэзии. Помимо романов и рассказов Ка́рела Ча́пека, придумавшего слово "робот" (от чешского "robota"), обратите внимание на поэтов: Ярослав Сейферт, К. Г. Маха, Я́рослав Врхлицкий, Ян Не́руда, В. Голан, Ф. Халас, Ви́тезслав Не́звал, и др.; писателей: Ми́лан Ку́ндера, Йо́зеф Шкво́рецкий, Людвик Вацулик, Богумил Грабал. И это далеко не все!</p>
                <img src="../Pictures/on-line_Czech.jpg" style="width: 100%" alt="">
                <p>А для чего Вы изучаете чешский язык?</p>
                <p>Занятия проводятся по Skype в удобное для Вас время носителями языка!</p>
            </div>
        </div>
        </div>
    </main>

    <?php
        require_once "../Detals/menus.php";
        require_once "../Detals/footer.php";
    ?>
   
    <script src="Foreign languages.js"></script>

</body>