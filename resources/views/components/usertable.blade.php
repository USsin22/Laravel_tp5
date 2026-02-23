@props(['nom' => 'User', 'users' => []])

<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ $nom }} - Users Table</h5>
    </div>
    <div class="card-body">
        @if(count($users) > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user['id'] ?? '-' }}</td>
                                <td>{{ $user['name'] ?? '-' }}</td>
                                <td>{{ $user['email'] ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted">No users found.</p>
        @endif
    </div>
</div>
