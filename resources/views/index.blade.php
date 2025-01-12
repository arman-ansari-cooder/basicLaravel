@extends('layout')

@section('title', 'Home Page')

@section('content')
    <!-- Loading Spinner -->
    <div id="loading-spinner" class="loading-spinner">
        <div class="spinner"></div>
    </div>

    <div class="container">
        <!-- Carousel Section -->
        <div id="featureCarousel" class="carousel slide animated fadeInUp" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="Feature 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Feature 1</h5>
                        <p>Short description of feature 1.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="Feature 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Feature 2</h5>
                        <p>Short description of feature 2.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x300" class="d-block w-100" alt="Feature 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Feature 3</h5>
                        <p>Short description of feature 3.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#featureCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featureCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="text-center animated fadeInUp mt-5">
            <h1>Welcome to Our Website</h1>
            <p>This is the home page, featuring a responsive navigation bar and an attractive footer.</p>
            <p>Explore our features, pricing, and contact us for more information.</p>
        </div>

        <!-- Example Cards Section -->
        <div class="row mt-5">
            <div class="col-md-4 animated fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Description of Feature 1. It provides some brief details about the feature.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animated fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Description of Feature 2. It highlights the benefits of using this feature.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animated fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">Description of Feature 3. It explains why this feature is useful.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Box -->
        <div class="chat-box">
            <div class="chat-header">
                <span>Chat with Us</span>
                <button id="close-chat" class="close-chat-btn">X</button>
            </div>
            <div class="chat-body">
                <div class="messages">
                    <!-- Messages will appear here -->
                </div>
                <input type="text" class="form-control" placeholder="Type your message..." id="chat-input">
                <button class="btn btn-primary" id="send-message">Send</button>
            </div>
        </div>

    </div>

@endsection

@push('styles')
    <style>
        /* Page Animation */
        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .fadeInUp {
            animation-name: fadeInUp;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Loading Spinner */
        .loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Chat Box Styling */
        .chat-box {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
        }

        .chat-header {
            background-color: #3498db;
            color: white;
            padding: 10px;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px 8px 0 0;
        }

        .close-chat-btn {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .chat-body {
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .messages {
            max-height: 200px;
            overflow-y: auto;
            margin-bottom: 10px;
        }

        .messages p {
            padding: 8px;
            background-color: #f1f1f1;
            border-radius: 5px;
            margin: 5px 0;
        }

        #chat-input {
            margin-bottom: 10px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hide loading spinner after 3 seconds
            setTimeout(function() {
                document.getElementById('loading-spinner').style.display = 'none';
            }, 3000);

            // Open chat box
            const chatBox = document.querySelector('.chat-box');
            chatBox.style.display = 'flex';

            // Close chat box
            document.getElementById('close-chat').addEventListener('click', function() {
                chatBox.style.display = 'none';
            });

            // Handle message sending via WhatsApp API
            document.getElementById('send-message').addEventListener('click', function() {
                const messageInput = document.getElementById('chat-input');
                const messageText = messageInput.value.trim();
                const phoneNumber = '<Your-WhatsApp-Number>';  // Replace with your WhatsApp phone number
                if (messageText) {
                    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(messageText)}`;
                    window.open(whatsappUrl, '_blank');
                    messageInput.value = ''; // Clear input field
                }
            });
        });
    </script>
@endpush
