<x-layout title="Contact - Justin Bieber">
    <style>
    .contact-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        max-width: 450px;
    }

    .contact-container {
        width: 100%;
        background: #1f2937;
        border-radius: 25px;
        padding: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,.5);
    }
    .contact-container h2 { font-size: 28px; margin-bottom: 10px; text-align: center; }
    .contact-container p.desc { color: #bdbdbd; font-size: 14px; text-align: center; margin-bottom: 30px; }
    .info-row { display: flex; align-items: center; gap: 15px; background: #2d3748; padding: 15px; border-radius: 12px; margin-bottom: 15px; transition: 0.3s; }
    .info-row:hover { background: #3b4658; }
    .icon-wrapper { width: 45px; height: 45px; border-radius: 10px; background: #374151; display: flex; align-items: center; justify-content: center; font-size: 20px; color: #7f5af0; }
    .details h4 { font-size: 12px; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.5px; }
    .details p { font-size: 15px; margin-top: 2px; font-weight: bold; }
    .social-links { display: flex; justify-content: center; gap: 15px; margin-top: 30px; border-top: 1px solid #374151; padding-top: 20px; }
    .social-btn { padding: 10px 20px; border-radius: 50px; background: #7f5af0; color: white; text-decoration: none; font-size: 14px; font-weight: bold; transition: 0.3s; }
    .social-btn:hover { background: #6842eb; transform: translateY(-2px); }

    .booking-note h3 {
        color: #7f5af0;
        font-size: 18px;
        margin-bottom: 8px;
    }
    .booking-note p {
        color: #bdbdbd;
        font-size: 14px;
        line-height: 1.5;
    }
    </style>

    <div class="contact-wrapper">
        <div class="contact-container">
            <h2>Get In Touch</h2>
            <p class="desc">For business management, press inquiries, and booking opportunities regarding Justin Bieber.</p>

            <div class="info-row">
                <div class="icon-wrapper">💼</div>
                <div class="details">
                    <h4>Management</h4>
                    <p>SB Projects</p>
                </div>
            </div>

            <div class="info-row">
                <div class="icon-wrapper">📢</div>
                <div class="details">
                    <h4>Press & PR</h4>
                    <p>press@bieberofficial.com</p>
                </div>
            </div>

            <div class="info-row">
                <div class="icon-wrapper">📅</div>
                <div class="details">
                    <h4>Tour Bookings</h4>
                    <p>caa-agency@bieber.com</p>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="social-btn">Instagram</a>
                <a href="#" class="social-btn">Twitter</a>
            </div>
        </div>

        <x-card>
            <div class="booking-note">
                <h3>Interested in a Collaboration?</h3>
                <p>Reach out through the channels above for official booking, sponsorship, or media inquiries related to Justin Bieber.</p>
            </div>
        </x-card>
    </div>
</x-layout>