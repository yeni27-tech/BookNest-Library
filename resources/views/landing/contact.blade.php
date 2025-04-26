<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - BookNest</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
@extends('layouts.landingApp')

@section('title', 'contact')

@section('content')
    <section class="hero">
        <h1>Kontak Kami</h1>
        <p>Hubungi kami untuk pertanyaan, saran, atau informasi lebih lanjut tentang BookNest</p>
    </section>

    <section class="section section-light">
        <h2 class="section-title">Hubungi Kami</h2>
        <div class="contact-container">
            <div class="contact-info animated-element">
                <h3>Informasi Kontak</h3>
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <a href="mailto:info@booknest.id">info@booknest.id</a>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-text">
                        <a href="tel:+622112345678">+62 21 1234 5678</a>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <a href="#">Jl. Literasi No. 1, Jakarta, Indonesia</a>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="contact-form animated-element">
                <h3>Kirim Pesan</h3>
                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>
        </div>
        <div class="map-container animated-element">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.309071944112!2d106.82199931476928!3d-6.222684995492673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e8b2c7c4f3%3A0x4b8b7a0c9b7f7c7b!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1698765432109!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection
