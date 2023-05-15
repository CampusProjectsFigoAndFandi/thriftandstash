@extends('layout')
@section('content')
<main onscroll="aboutNavScroll()">
    <div id="aboutNav">
        <div id="aboutNavBrand"><span class="material-symbols-rounded m-auto me-2">
                store
            </span>
            <span>
                OnlineThrifting
            </span>
        </div>
        <a href="/posts">
            <button class="btn btn-primary">
                <span class="material-symbols-rounded">
                    storefront
                </span>
                <span class="material-symbols-rounded">
                    arrow_right_alt
                </span>
            </button>
        </a>

    </div>
    <div id="aboutMain">
        <div id="aboutMainHeader">


            <h2>
                About Us
            </h2>

            <img src="{{asset('/images/about.png')}}" alt="">

        </div>
        <div id="desc" class="col-8 offset-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis consequatur perspiciatis in maiores
            sed?
            Voluptatum ex rerum unde sequi vero ducimus cumque quos harum mollitia iste, nam quae facilis officia.
            Dolores, et earum sit ut officiis non minus vero quo maxime illum sapiente, amet accusantium, fuga
            provident
            obcaecati iste consequuntur distinctio. Minima magni qui dolore ab ut voluptate, doloribus nesciunt.
            Amet sequi odio magni delectus voluptas molestiae, accusamus nihil debitis ullam enim saepe rerum fuga,
            dolores soluta aspernatur sit repudiandae excepturi odit mollitia recusandae ratione. Reiciendis
            quibusdam
            quaerat sequi aliquid!
            Saepe exercitationem iste sit, repellat doloremque facilis pariatur sequi adipisci vel necessitatibus
            deleniti alias voluptatum, veniam, tempore blanditiis atque commodi quia numquam quis corporis. Cumque
            blanditiis eveniet eaque assumenda nulla!
            Repellat maiores voluptas repudiandae repellendus iusto culpa corporis iste, sit facilis saepe totam
            dolor
            dolorem eaque illo. Ea eos ullam, sit laboriosam ab saepe facere! Nam quisquam asperiores natus in.
            Unde ipsam quo aperiam veniam dolorum tenetur ut eaque placeat inventore quis repellat autem nisi
            libero,
            mollitia laudantium eveniet sequi laborum quae exercitationem itaque perferendis numquam asperiores!
            Commodi, pariatur rerum!
        </div>
    </div>
    <div id="aboutFAQ" class="col-6 offset-3">
        <h2>
            Frequently Asked Question (FAQ)
        </h2>
        <div class="faqMain">
            <div class="faqQuestion" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit? Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit?
                <span class="material-symbols-rounded">
                    expand_more
                </span>
            </div>
            <div class="faqAnswer faqAnswerHidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates neque consectetur accusamus
                sed
                ratione! Magnam qui repudiandae doloribus laudantium accusamus necessitatibus odit est ipsa, veniam,
                perspiciatis cum expedita repellendus.
                Vitae aspernatur vero assumenda nam sed quae aliquam rem optio fugiat quis consequatur labore, in
                corporis
                ipsam blanditiis cum minima dolorem saepe? Explicabo ex nam nostrum maiores modi, eos corrupti?
                Quam recusandae minus eius tempora, asperiores cum dicta debitis ducimus deleniti exercitationem
                inventore
                earum alias error est libero nostrum eum laudantium placeat ipsum harum! Dignissimos, distinctio
                perferendis? Error, temporibus reprehenderit?
                Est, totam sit. Recusandae reprehenderit nulla ratione aperiam! Perspiciatis, velit consectetur facilis
                cumque quo laborum, fugiat ab natus impedit deleniti dolorum at consequuntur esse nam assumenda labore
                iste
                porro doloribus!
            </div>
        </div>
        <div class="faqMain">
            <div class="faqQuestion" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit?
                <span class="material-symbols-rounded">
                    expand_more
                </span>
            </div>
            <div class="faqAnswer faqAnswerHidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates neque consectetur accusamus
                sed
                ratione! Magnam qui repudiandae doloribus laudantium accusamus necessitatibus odit est ipsa, veniam,
                perspiciatis cum expedita repellendus.
                Vitae aspernatur vero assumenda nam sed quae aliquam rem optio fugiat quis consequatur labore, in
                corporis
                ipsam blanditiis cum minima dolorem saepe? Explicabo ex nam nostrum maiores modi, eos corrupti?
                Quam recusandae minus eius tempora, asperiores cum dicta debitis ducimus deleniti exercitationem
                inventore
                earum alias error est libero nostrum eum laudantium placeat ipsum harum! Dignissimos, distinctio
                perferendis? Error, temporibus reprehenderit?

            </div>
        </div>
        <div class="faqMain">
            <div class="faqQuestion" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit? Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit?
                <span class="material-symbols-rounded">
                    expand_more
                </span>
            </div>
            <div class="faqAnswer faqAnswerHidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates neque consectetur accusamus
                sed
                ratione! Magnam qui repudiandae doloribus laudantium accusamus necessitatibus odit est ipsa, veniam,
                perspiciatis cum expedita repellendus.
                Vitae aspernatur vero assumenda nam sed quae aliquam rem optio fugiat quis consequatur labore, in
                corporis
                ipsam blanditiis cum minima dolorem saepe? Explicabo ex nam nostrum maiores modi, eos corrupti?
                Quam recusandae minus eius tempora, asperiores cum dicta debitis ducimus deleniti exercitationem
                inventore
                earum alias error est libero nostrum eum laudantium placeat ipsum harum! Dignissimos, distinctio
                perferendis? Error, temporibus reprehenderit?
                Est, totam sit. Recusandae reprehenderit nulla ratione aperiam! Perspiciatis, velit consectetur facilis
                cumque quo laborum, fugiat ab natus impedit deleniti dolorum at consequuntur esse nam assumenda labore
                iste
                porro doloribus!
            </div>
        </div>
        <div class="faqMain">
            <div class="faqQuestion" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit?
                <span class="material-symbols-rounded">
                    expand_more
                </span>
            </div>
            <div class="faqAnswer faqAnswerHidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates neque consectetur accusamus
                sed
                ratione! Magnam qui repudiandae doloribus laudantium accusamus necessitatibus odit est ipsa, veniam,
                perspiciatis cum expedita repellendus.
                Vitae aspernatur vero assumenda nam sed quae aliquam rem optio fugiat quis consequatur labore, in
                corporis
                ipsam blanditiis cum minima dolorem saepe? Explicabo ex nam nostrum maiores modi, eos corrupti?
                Quam recusandae minus eius tempora, asperiores cum dicta debitis ducimus deleniti exercitationem
                inventore
                earum alias error est libero nostrum eum laudantium placeat ipsum harum! Dignissimos, distinctio
                perferendis? Error, temporibus reprehenderit?

            </div>
        </div>
        <div class="faqMain">
            <div class="faqQuestion" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit? Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit?
                <span class="material-symbols-rounded">
                    expand_more
                </span>
            </div>
            <div class="faqAnswer faqAnswerHidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates neque consectetur accusamus
                sed
                ratione! Magnam qui repudiandae doloribus laudantium accusamus necessitatibus odit est ipsa, veniam,
                perspiciatis cum expedita repellendus.
                Vitae aspernatur vero assumenda nam sed quae aliquam rem optio fugiat quis consequatur labore, in
                corporis
                ipsam blanditiis cum minima dolorem saepe? Explicabo ex nam nostrum maiores modi, eos corrupti?
                Quam recusandae minus eius tempora, asperiores cum dicta debitis ducimus deleniti exercitationem
                inventore
                earum alias error est libero nostrum eum laudantium placeat ipsum harum! Dignissimos, distinctio
                perferendis? Error, temporibus reprehenderit?
                Est, totam sit. Recusandae reprehenderit nulla ratione aperiam! Perspiciatis, velit consectetur facilis
                cumque quo laborum, fugiat ab natus impedit deleniti dolorum at consequuntur esse nam assumenda labore
                iste
                porro doloribus!
            </div>
        </div>
        <div class="faqMain">
            <div class="faqQuestion" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit?
                <span class="material-symbols-rounded">
                    expand_more
                </span>
            </div>
            <div class="faqAnswer faqAnswerHidden">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates neque consectetur accusamus
                sed
                ratione! Magnam qui repudiandae doloribus laudantium accusamus necessitatibus odit est ipsa, veniam,
                perspiciatis cum expedita repellendus.
                Vitae aspernatur vero assumenda nam sed quae aliquam rem optio fugiat quis consequatur labore, in
                corporis
                ipsam blanditiis cum minima dolorem saepe? Explicabo ex nam nostrum maiores modi, eos corrupti?
                Quam recusandae minus eius tempora, asperiores cum dicta debitis ducimus deleniti exercitationem
                inventore
                earum alias error est libero nostrum eum laudantium placeat ipsum harum! Dignissimos, distinctio
                perferendis? Error, temporibus reprehenderit?

            </div>
        </div>

    </div>
</main>

@endsection