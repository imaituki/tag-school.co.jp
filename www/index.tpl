<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file=$template_meta}
<link rel="stylesheet" href="/common/css/import.css">
{include file=$template_javascript}
</head>
<body id="top">
<div id="base">
{include file=$template_header}
<main>
<div id="top_main">
	<div class="image">
		<div class="visible-xs"><img src="/common/image/contents/top/main-sp.jpg" alt="岡山市の集団×個別融合型 新総合学習塾 TAG school[タッグスクール]"></div>
		<div class="hidden-xs"><img src="/common/image/contents/top/main.jpg" alt="岡山市の集団×個別融合型 新総合学習塾 TAG school[タッグスクール]"></div>
	</div>
	<div id="main_text" class="text">
		<div class="center">
			<div class="text_in">
				<div class="logo"><img src="/common/image/contents/top/logo.png" alt="岡山市の総合学習塾 タッグスクール TAG school"></div>
				<h2 class="mincho">集団×個別指導塾 TAGスクール<br><span class="c_red">2020年度<br>新規生徒募集中！</span></h2>
				<!--
				<p>岡山市下中野に今までにない新しい塾が誕生！</p>
				-->
			</div>
		</div>
	</div>
	{if !empty($t_information.0)}
	<div id="main_news" class="text">
		<div class="center">
			<div class="text_in">
				<dl class="news_wrap">
					<dt class="c_red">NEWS</dt>
					<dd>
						<span class="date">{$t_information.0.date|date_format:'%Y.%m.%d'}</span>
						<a href="{$_FRONT.home}/information/detail.php?id={$t_information.0.id_information}">{$t_information.0.title}</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	{/if}
</div>
<div id="body">
	<section>
		<div id="online_banner" class=" wrapper center">
			<a href="/online-consultation/" class="ov">
                <img src="/common/image/contents/top/online_banner_sp.jpg" alt="LINEオンライン面談" class="visible-only">
            </a>
		</div>
	</section>
	<section>
		<div id="top_about">
			<div class="photo img_back"><img src="/common/image/contents/top/image1.jpg" alt="TAG schoolについて"></div>
			<div class="text">
				<div class="center">
					<div class="text_in">
						<h2 class="c_brown mincho">TAG schoolについて</h2>
						<p class="mb20">TAG schoolは、岡山初の集団指導と個別指導を融合した新総合学習塾です。<br>
							『わかる』から『できる』、そして『えらべる』へ<br>
							“今までにない学び” をご提供いたします。</p>
						<div class="pos_ac"><a href="/about/" class="button _type1">詳しく見る<i class="fa fa-chevron-right"></i></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="top_strength">
			<div class="wrapper bg_l_brown">
				<div class="center">
					<h2 class="hl_1 mincho"><span class="en">Strength</span><span class="ja">TAGの強み</span></h2>
					<div class="row">
						<div class="col-xs-4">
							<div class="box icon_box">
								<a href="/strength/#strength_1">
									<div class="photo"><img src="/common/image/contents/top/image2.jpg" alt="オリジナル指導形態"></div>
									<div class="text">
										<div class="icon"><span><img src="/common/image/contents/top/icon1.png" alt="オリジナル指導形態"></span></div>
										<h3 class="mincho c_brown flex_c"><span class="flex_c"><img src="/common/image/contents/top/r_icon.png" alt="オリジナル指導形態"></span><span>オリジナル指導形態</span></h3>
										<p class="caption">Original teaching form</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="box icon_box">
								<a href="/strength/#strength_2">
									<div class="photo"><img src="/common/image/contents/top/image3.jpg" alt="ハイレベル講師陣"></div>
									<div class="text">
										<div class="icon"><span><img src="/common/image/contents/top/icon2.png" alt="ハイレベル講師陣"></span></div>
										<h3 class="mincho c_brown flex_c"><span class="flex_c"><img src="/common/image/contents/top/r_icon.png" alt="ハイレベル講師陣"></span><span>ハイレベル講師陣</span></h3>
										<p class="caption">High-level teachers</p>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="box icon_box">
								<a href="/strength/#strength_3">
									<div class="photo"><img src="/common/image/contents/top/image4.jpg" alt="IoE"></div>
									<div class="text">
										<div class="icon"><span><img src="/common/image/contents/top/icon3.png" alt="IoE"></span></div>
										<h3 class="mincho c_brown flex_c"><span class="flex_c"><img src="/common/image/contents/top/r_icon.png" alt="IoE"></span><span>IoE</span></h3>
										<p class="caption">Internet of Education</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="pos_ac"><a href="/strength/" class="button _type1">詳しく見る<i class="fa fa-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="course">
			<div class="wrapper bg_common">
				<div class="center">
					<h2 class="hl_1 mincho"><span class="en">Course</span><span class="ja">コース紹介</span></h2>
					<div id="course_navi" class="tab_navi" data-tab="course">
						<div class="row">
							<div class="col-xs-4 col-4">
								<div class="box course_navi _orange tab height-1_all">
									<a href="#primary">
										<div class="photo img_back"><img src="/common/image/contents/top/image5.jpg" alt="小学生コース"></div>
										<div class="text">
											<h3 class="mincho c_orange">小学生</h3>
											<p class="caption height-2_all">Schoolchild</p>
											<ul class="icon_list c_orange">
												<li>集団<br>指導</li>
												<li>個別<br>指導</li>
											</ul>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-4 col-4">
								<div class="box course_navi _blue tab height-1_all">
									<a href="#middle">
										<div class="photo img_back"><img src="/common/image/contents/top/image6.jpg" alt="中学生コース"></div>
										<div class="text">
											<h3 class="mincho c_blue">中学生</h3>
											<p class="caption height-2_all">Middle school<span class="hidden-only"> student</span></p>
											<ul class="icon_list c_blue">
												<li>集団<br>指導</li>
												<li>個別<br>指導</li>
											</ul>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-4 col-4">
								<div class="box course_navi _green tab height-1_all">
									<a href="#high">
										<div class="photo img_back"><img src="/common/image/contents/top/image7.jpg" alt="高校生コース"></div>
										<div class="text">
											<h3 class="mincho c_green">高校生</h3>
											<p class="caption height-2_all">High school<span class="hidden-only"> student</span></p>
											<ul class="icon_list c_green">
												<li>個別<br>指導</li>
											</ul>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id="course_area">
						<div class="course" id="primary">
							<h2 class="title mincho c_orange">「TAG式小学生の学力の考え方」に基づき各コースを設定しています。</h2>
							<h3 class="hl_2"><span class="main c_orange">集団指導</span><span class="sub">『わかる』・『できる』集団指導</span></h3>
							<div class="row mb50">
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_orange c0">小1～3 基礎学力定着コース　<span class="disp_ib">月額14,200円（税込）</span></h4>
										<div class="box_in">楽しみながら、基礎学力の土台となる学びの感覚『体感共育』を行っていきます。</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_orange c0">小4 基礎学力定着コース　<span class="disp_ib">月額17,200円（税込）</span></h4>
										<div class="box_in">勉強する習慣を身につけることを目的とし、算数・国語を中心とした基礎学力をつけていきます。</div>
									</div>
								</div>
							</div>
							<h3 class="hl_2"><span class="main c_orange">個別指導</span><span class="sub">『えらべる』個別指導【60分／80分】</span></h3>
							<p class="mb30">ご要望に応じて、60分コース・80分コースを選択することが可能です。</p>
							<div class="row">
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_orange c0">小1～6 基礎学力定着コース　<span class="disp_ib">月額14,700円～（税込）</span></h4>
										<div class="box_in">基礎学力の定着を目指し、個々のレベル・現状に応じて指導を行ってまいります。</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_orange c0">小4 応用学力演習コース　<span class="disp_ib">月額17,700円～（税込）</span></h4>
										<div class="box_in">基礎学力に加え、応用学力の習得を目指し、個々のレベル・現状に応じて指導を行ってまいります。中学受験へ向けた準備コースとしてもご活用ください。</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_orange c0">小5・6 他塾併用中学受験サポートコース<br><span class="disp_ib">月額17,700円～（税込）</span></h4>
										<div class="box_in">中学受験志望者を対象とし、受験へ向けて、個々の志望校・レベル・現状に応じて指導を行ってまいります。</div>
									</div>
								</div>
							</div>
							<p class="pos_ar c_g">※別途、入会金・諸費・テキスト代が必要になります。</p>
						</div>
						<div class="course" id="middle">
							<h3 class="hl_2"><span class="main c_blue">集団指導</span><span class="sub">『わかる』・『できる』集団指導</span></h3>
							<div class="row mb50">
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_blue c0">中1～3 高校受験コース　<span class="disp_ib">月額18,700円（税込）</span></h4>
										<div class="box_in">学校成績の向上はもちろんのこと、高校受験へ向けて各教科ごとにTAG式『LGCT＋F』指導で理解を深めていきます。</div>
									</div>
								</div>
							</div>
							<h3 class="hl_2"><span class="main c_blue">個別指導</span><span class="sub">『えらべる』個別指導【80分】</span></h3>
							<div class="row">
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_blue c0">中1～3 高校受験コース　<span class="disp_ib">月額19,200円～（税込）</span></h4>
										<div class="box_in">高校受験志望者を対象とし、受験へ向けて、個々の志望校・レベル・現状に応じて指導を行ってまいります。</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_blue c0">中1～3 中高一貫校コース　<span class="disp_ib">月額20,700円～（税込）</span></h4>
										<div class="box_in">中高一貫校生を対象とし、大学受験も見据え、学校の勉強の補習を中心に指導を行ってまいります。</div>
									</div>
								</div>
							</div>
							<p class="pos_ar c_g">※別途、入会金・諸費・テキスト代が必要になります。</p>
						</div>
						<div class="course" id="high">
							<h3 class="hl_2"><span class="main c_green">個別指導</span><span class="sub">『えらべる』個別指導【80分】</span></h3>
							<div class="row">
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_green c0">高1・2 大学受験コース　<span class="disp_ib">月額22,200円～（税込）</span></h4>
										<div class="box_in">大学受験志望者を対象とし、学校の勉強の補習に加え、受験へ向けて個々の志望校・レベル・現状に応じて指導を行ってまいります。</div>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="box course_box mb30 height-1">
										<h4 class="box_title bg_green c0">高3 大学受験コース　<span class="disp_ib">月額23,700円～（税込）</span></h4>
										<div class="box_in">受験生を対象とし、学校の勉強の補習に加え、受験へ向けて個々の志望校・レベル・現状に応じて指導を行ってまいります。</div>
									</div>
								</div>
							</div>
							<p class="pos_ar c_g">※別途、入会金・諸費・テキスト代が必要になります。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="flow">
			<div class="wrapper bg_l_brown">
				<div class="center">
					<h2 class="hl_1 mincho"><span class="en">Flow</span><span class="ja">入塾の流れ</span></h2>
					<div class="flow_area">
						<div class="row">
							<div class="col-xs-4">
								<div class="flow_unit fa_a height-1">
									<div class="photo"><img src="/common/image/contents/top/flow1.png" alt="お問い合わせ"></div>
									<div class="text">
										<h3 class="disp_tbl height-2_all"><span class="disp_td">お問い合わせ</span></h3>
										<p>お電話またはお問い合わせフォームにて、お気軽にお問い合わせください</p>
									</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="flow_unit fa_a height-1">
									<div class="photo"><img src="/common/image/contents/top/flow2.png" alt="面 談"></div>
									<div class="text">
										<h3 class="disp_tbl height-2_all"><span class="disp_td">面 談<span class="comment">※クラス判定テスト（一部学年）</span></span></h3>
										<p>・プロ教育アドバイザーによる面談</p>
										<p>・学力レベルの把握・集団または個別の適正確認</p>
									</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="flow_unit height-1">
									<div class="photo"><img src="/common/image/contents/top/flow4.png" alt="入塾手続き"></div>
									<div class="text">
										<h3 class="disp_tbl height-2_all"><span class="disp_td">入塾手続き</span></h3>
										<p>入塾申込み後、授業スタート</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="space">
			<div class="wrapper-t bg_l_brown">
				<div class="center">
					<h2 class="hl_1 mincho"><span class="en">TAG Space</span><span class="ja">TAGの空間</span></h2>
				</div>
				<div class="wrapper space_wrap">
					<div class="center">
						<p class="mb30">TAG schoolは、講師・親・生徒がつながり、良質な学びを実現する空間づくりを目指しています。<br>
							コンセプトは、『従来の塾の無機質な空間とは異なる、TAGならではの学習空間をつくりあげたい』という思いから、<br class="hidden-xs">木を基調としたオシャレで落ち着いたカフェラウンジ空間をデザインコンセプトとしました。</p>
						<p class="mb30">皆様一人ひとりに、様々なお時間をお過ごしいただけるよう、入口にコミュニケーションラウンジをご用意いたしました。<br>
							ここでは、生徒同士が自習の中で学びあったり、お迎え時に親と講師が会話したり、講師と生徒が楽しくコミュニケーションをとったりと、<br class="hidden-xs">様々な接点を生み、繋がりが広がっていく空間となっております。また、塾カフェとして、コーヒーや紅茶などのお飲み物をお楽しみいただけます。</p>
						<p>TAG schoolの教室はコンセプト通り、リラックスして勉強に集中できる学習空間となっています。<br>
							良質な学びの時間をTAG schoolでご体感ください。</p>
					</div>
				</div>
				<div class="bg0">
					<div class="row no-gutters">
						<div class="col-xl-6 hidden-lg">
							<div class="row no-gutters">
								<div class="col-xs-6 col-6">
									<div class="height-1">
										<img src="/common/image/contents/top/space2.jpg" alt="自習スペース">
										<img src="/common/image/contents/top/space3.jpg" alt="教室">
									</div>
								</div>
								<div class="col-xs-6 col-6 lounge">
									<div class="img_back height-1">
										<img src="/common/image/contents/top/space1.jpg" alt="コミュニケーションラウンジ">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="row no-gutters">
								<div class="col-xs-6 col-6">
									<div class="height-1">
										<img src="/common/image/contents/top/space2.jpg" alt="自習スペース">
										<img src="/common/image/contents/top/space3.jpg" alt="教室">
									</div>
								</div>
								<div class="col-xs-6 col-6 lounge">
									<div class="img_back height-1">
										<img src="/common/image/contents/top/space1.jpg" alt="コミュニケーションラウンジ">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="teachers">
			<div class="wrapper bg_common">
				<div class="center">
					<h2 class="hl_1 mincho"><span class="en">Teachers</span><span class="ja">講師紹介</span></h2>
					<div class="teacher_unit bor_b" id="kimoto">
						<div class="row">
							<div class="col-xs-4">
								<div class="photo mb20"><img src="/common/image/contents/top/teacher1.png" alt="木本 健太郎"></div>
							</div>
							<div class="col-xs-8">
								<h3 class="title"><span class="name mincho">木本 健太郎</span><span class="ruby">KENTARO KIMOTO</span><span class="tag">塾長</span></h3>
								<p class="mb10">自然共生ホールディングスの光本社長とのご縁がつながり、ついに下中野ビル5階で、集団指導と個別指導が融合した新総合学習塾のTAG schoolが開校します。</p>
								<p class="mb10">小学4年生の時、「僕の夢は先生になることです」と学校の日記に書いたのを思い出します。大人になった今、塾長・塾経営者として、地元岡山で夢が実現できるとは当時は思いもしませんでした。夢は叶うのだなと実感しています。</p>
								<p class="mb10">受験や進路選択はあくまで手段です。TAG schoolの生徒には手段としての勉強や進路選択ではなく、将来なりたい自分や夢へ向かって頑張る大切さを伝えていけたらと考えています。常に環境変化する現代社会だからこそ、自分の軸を持って強く生きていってほしいと思います。</p>
								<p class="mb30">TAG schoolで会いましょう!!</p>
								<div class="profile_box">
									<div class="profile c_red">
										<dl>
											<dt>PROFILE</dt>
											<dd>1985年岡山県岡山市生まれ<br>
												岡山朝日高校、筑波大学、東京大学大学院出身</dd>
										</dl>
									</div>
								<p class="mb10">筑波大学で教員免許、東京大学大学院で専修免許を取得。大手メガバンクへ就職し、東京で約5年間ビジネスマンとして、営業や企画を学び、2年目から社長賞を受賞するなど成果を残した。その後、脱サラし教育業界へ。東京自由が丘でマンツーマン個別指導塾を創業。</p>
								<p class="mb10">現在は、理系教科のプロ講師・教育コンサルタント・学習塾経営者として、中国上海やアメリカロサンゼルスでの塾運営にも関わり、日本だけでなく世界中を飛びまわって仕事をしている。</p>
								<p class="mb10">また最近では、世界に羽ばたくことを夢見る子供たちを応援したいという思いから、探求学習『a-school』の特別講師や国際バカロレア教育のプロデュースに関わり、教科学習にとらわれないグローバル人材の育成を目指している。</p>
								<p>2019年9月、TAG school運営会社の株式会社TAG Corporation 28代表取締役に就任。そして、2020年2月、地元岡山で新総合学習塾のTAG schoolを立ち上げ、塾長に就任する。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	{if !empty($t_information)}
	<section>
		<div id="top_information">
			<div class="wrapper">
				<div class="center">
					<h2 class="hl_1 mincho"><span class="en">Information</span><span class="ja">新着情報</span></h2>
					<div class="info_list">
						<div class="row">
							{foreach from=$t_information item=data}
								<div class="col-xs-4">
									<div class="info_unit">
										<a href="{$_FRONT.home}/information/detail.php?id={$data.id_information}">
											<div class="photo img_rect">
												<img src="{if !empty($data.image1)}{$_IMAGEFULLPATH}/information/image1/m_{$data.image1}{else}common/image/contents/null.jpg{/if}" alt="{$data.title}" />
											</div>
											<div class="text">
												<div class="meta">
													<span class="tag">{$OptionCategory[$data.id_category]}</span>
													<span class="date">{$data.date|date_format:'%Y.%m.%d'}</span>
												</div>
												<h3>{$data.title}</h3>
											</div>
										</a>
									</div>
								</div>
							{/foreach}
						</div>
					</div>
					<div class="pos_ac"><a href="{$_FRONT.home}/information/" class="button _type2">すべてのお知らせ<i class="fa fa-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
	</section>
	{/if}
</div>
</main>
{include file=$template_footer}
</div>
</body>
</html>
