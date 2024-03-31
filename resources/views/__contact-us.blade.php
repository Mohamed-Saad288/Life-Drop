<section id="contact">
    <div class="contact-title">
        <h1 data-translate="contact">Contact Us</h1>
    </div>
    <form class="contact" action="{{ route('contact') }}" method="Post" class="contact-form">
        @csrf
        <div class="margin">
            <div class="inputGroup">
                <input  type="text" name="name" required />
                <span class="inputBar"></span>
                <label data-translate="con-name">Name</label>
                <x-form.erorr name="name"/>
            </div>
            <div class="inputGroup">
                <input type="email" name="email" required />
                <span class="inputBar"></span>
                <label data-translate="con-email">Email</label>
                <x-form.erorr name="email"/>
            </div>
            <div class="inputGroup">
                <textarea type="textarea" name="message"  required></textarea>
                <span class="inputBar"></span>
                <label data-translate="con-message">Message</label>
                <x-form.erorr name="message"/>
            </div>
            <button class="contact-btn" data-translate="con-btn">Send</button>
        </div>
    </form>
</section>
