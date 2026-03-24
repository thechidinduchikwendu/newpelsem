@extends('layouts.app')

@section('title', 'Pelsem Freight | Global Freight Forwarding')

@section('content')
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="#home">Pelsem Freight</a>
        <nav class="nav-links" aria-label="Main navigation">
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#why-us">Why Us</a>
            <a href="#contact">Contact</a>
        </nav>
        <a class="btn btn-sm" href="#contact">Get a Quote</a>
    </div>
</header>

<main>
    <section class="hero" id="home" aria-label="Pelsem Freight hero slider">
        <div class="hero-overlay"></div>
        <div class="slides" data-slider>
            <article class="slide active" style="--bg:url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1600&q=80')">
                <div class="container slide-content">
                    <p class="eyebrow">Global Freight Forwarding</p>
                    <h1>Move cargo confidently across air, sea, and road routes.</h1>
                    <p>Pelsem Freight delivers dependable logistics solutions with transparent communication, secure handling, and on-time coordination.</p>
                    <a class="btn" href="#contact">Request Shipping Plan</a>
                </div>
            </article>
            <article class="slide" style="--bg:url('https://images.unsplash.com/photo-1473448912268-2022ce9509d8?auto=format&fit=crop&w=1600&q=80')">
                <div class="container slide-content">
                    <p class="eyebrow">Door-to-Door Logistics</p>
                    <h2>Customs clearance and inland delivery managed by one partner.</h2>
                    <p>From export documentation to final delivery, our team coordinates each checkpoint to keep your supply chain efficient.</p>
                    <a class="btn" href="#services">Explore Services</a>
                </div>
            </article>
            <article class="slide" style="--bg:url('https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1600&q=80')">
                <div class="container slide-content">
                    <p class="eyebrow">Built for Businesses</p>
                    <h2>Scalable freight solutions for importers, exporters, and project cargo.</h2>
                    <p>Our operation supports commercial shipments with route planning, bonded warehousing, and responsive customer service.</p>
                    <a class="btn" href="#why-us">Why Pelsem</a>
                </div>
            </article>
        </div>
        <div class="slider-controls" aria-hidden="true">
            <button class="dot active" data-dot="0"></button>
            <button class="dot" data-dot="1"></button>
            <button class="dot" data-dot="2"></button>
        </div>
    </section>

    <section class="section" id="services">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow text-primary">Our Services</p>
                <h2>End-to-end freight forwarding services</h2>
            </div>
            <div class="grid cards-3">
                <article class="card">
                    <h3>Air Freight</h3>
                    <p>Fast and reliable airport-to-airport or door delivery for urgent cargo with full documentation support.</p>
                </article>
                <article class="card">
                    <h3>Ocean Freight</h3>
                    <p>FCL and LCL shipping solutions for cost-effective international movement with flexible transit options.</p>
                </article>
                <article class="card">
                    <h3>Road Transport</h3>
                    <p>Regional and cross-border trucking for first-mile and last-mile continuity across your supply chain.</p>
                </article>
                <article class="card">
                    <h3>Customs Brokerage</h3>
                    <p>Streamlined customs clearance with compliant declarations, HS classification, and duty guidance.</p>
                </article>
                <article class="card">
                    <h3>Warehousing</h3>
                    <p>Secure short-term and long-term storage with inventory visibility and cargo consolidation services.</p>
                </article>
                <article class="card">
                    <h3>Project Logistics</h3>
                    <p>Specialized planning for oversized or sensitive cargo with route surveys and risk-aware handling.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section-muted" id="about">
        <div class="container split">
            <div>
                <p class="eyebrow text-primary">About Pelsem Freight</p>
                <h2>Your trusted logistics partner in global trade.</h2>
                <p>Pelsem Freight Services positions itself as a dependable freight forwarding company focused on reliable execution, customer service, and efficient cargo movement for businesses of every size.</p>
                <p>We combine industry experience with practical routing insight to reduce delays and simplify shipping operations for our clients.</p>
            </div>
            <div class="stats">
                <div>
                    <strong>24/7</strong>
                    <span>Client Support</span>
                </div>
                <div>
                    <strong>Multi-Modal</strong>
                    <span>Air, Sea & Road</span>
                </div>
                <div>
                    <strong>Compliance-Led</strong>
                    <span>Customs Expertise</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="why-us">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow text-primary">Why Choose Us</p>
                <h2>Freight forwarding built on reliability and clarity</h2>
            </div>
            <div class="grid cards-3">
                <article class="card">
                    <h3>Operational Transparency</h3>
                    <p>Proactive shipment updates and milestone visibility help you plan with confidence.</p>
                </article>
                <article class="card">
                    <h3>Flexible Routing</h3>
                    <p>Alternative route planning keeps your cargo moving even when conditions change.</p>
                </article>
                <article class="card">
                    <h3>Dedicated Team</h3>
                    <p>A responsive logistics team that understands timelines, budgets, and cargo priorities.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section cta" id="contact">
        <div class="container cta-wrap">
            <div>
                <p class="eyebrow">Let’s Move Your Next Shipment</p>
                <h2>Talk to Pelsem Freight for a tailored forwarding plan.</h2>
                <p>Email: <a href="mailto:info@pelsemfreight.com">info@pelsemfreight.com</a> · Website: <a href="https://pelsemfreight.com">pelsemfreight.com</a></p>
            </div>
            <a class="btn btn-light" href="mailto:info@pelsemfreight.com">Contact Team</a>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <p>© {{ now()->year }} Pelsem Freight Services. All rights reserved.</p>
    </div>
</footer>
@endsection
