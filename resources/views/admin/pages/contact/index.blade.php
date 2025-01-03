@extends('admin.layouts.main')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Contact Messages</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Info</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Job Details</th>
                                    <th scope="col">Submitted at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $contact->name }}<br/>
                                        <span class="small">
                                            {{ $contact->email }}<br/>
                                            {{ $contact->phone }}
                                            
                                        </span>
                                </td>
                                    <td>{{ $contact->company }}</td>
                                    <td>{{ $contact->country }}</td>
                                    <td>{{ $contact->job_title }}</td>
                                    <td>{{ $contact->job_details }}</td>
                                    <td>{{ date('M d, Y', strtotime($contact->created_at))  }}</td>
                                    <td>    
                                        <div class="d-flex gap-2">

                                            <a class="text-primary" data-bs-toggle="modal" data-bs-target="#emailModal{{ $contact->id }}">Send Mail </a>
                                            <div class="modal fade" id="emailModal{{ $contact->id }}" tabindex="-1" aria-labelledby="emailModal{{ $contact->id }}Label" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <form class="modal-content" action="{{ route('admin.contact.send-email', $contact->id)}}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="emailModal{{ $contact->id }}Label">Send Email to {{$contact->name}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="message{{ $contact->id }}" class="form-label">Enter message</label>
                                                            <textarea class="form-control" name="content" id="message{{ $contact->id }}" rows="3" required></textarea>
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>


                                            <form  method="POST" action="{{ route('admin.contact.delete', $contact->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <span onclick="handleDeleteConfirm(this.closest('form'))" class="text-danger" style="cursor:pointer">Delete</span>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

<!-- Include CKEditor -->
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
    // Initialize CKEditor for all textareas with IDs starting with "message"
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('textarea[id^="message"]').forEach(function (textarea) {
            CKEDITOR.config.versionCheck = false;
            CKEDITOR.replace(textarea.id, {
                toolbar: [
                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                    { name: 'insert', items: ['Link'] },
                    { name: 'styles', items: ['Format'] },
                    { name: 'colors', items: ['TextColor', 'BGColor'] },
                    { name: 'undo', items: ['Undo', 'Redo'] }
                ],
                height: 300
            });
        });
    });
</script>
@endsection