<div class="admission-card">

    <div class="admission-header">
        <h3>Registration Form</h3>
    </div>

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">

            <!-- Student Name -->
            <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text"
                       id="student_name"
                       name="student_name"
                       class="form-control"
                       placeholder="Enter student name"
                       value="{{ old('student_name') }}"
                       required>

                @error('student_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Parent Name -->
            <div class="form-group">
                <label for="parent_name">Parent Name</label>
                <input type="text"
                       id="parent_name"
                       name="parent_name"
                       class="form-control"
                       placeholder="Enter parent name"
                       value="{{ old('parent_name') }}"
                       required>

                @error('parent_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Mobile Number -->
            <div class="form-group">
                <label for="phone">Mobile Number</label>
                <input type="tel"
                       id="phone"
                       name="phone"
                       class="form-control"
                       placeholder="Enter mobile number"
                       value="{{ old('phone') }}"
                       required>

                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email"
                       id="email"
                       name="email"
                       class="form-control"
                       placeholder="Enter email address"
                       value="{{ old('email') }}">

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Admission Course -->
            <div class="form-group">
                <label for="course">Admission Course</label>
                <select id="course"
                        name="course"
                        class="form-select"
                        required>

                    <option value="">Select Course</option>

                    @foreach (getClasses() as $class)
                        <option value="{{ $class }}" {{ old('course') == $class ? 'selected' : '' }}>{{ $class }}</option>
                    @endforeach

                </select>

                @error('course')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date"
                       id="date_of_birth"
                       name="date_of_birth"
                       class="form-control"
                       value="{{ old('date_of_birth') }}">

                @error('date_of_birth')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Upload Profile - Full Width -->
            <div class="form-group full-width">
                <label for="profile">Upload Profile</label>
                <input type="file"
                       id="profile"
                       name="profile"
                       class="form-control"
                       accept="image/jpeg,image/png,image/webp">

                @error('profile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address / Message - Full Width -->
            <div class="form-group full-width">
                <label for="message">Address</label>
                <textarea id="message"
                          name="message"
                          class="form-control"
                          placeholder="Enter address">{{ old('message') }}</textarea>

                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <button type="submit" class="admission-btn">
            Submit Registration <span>→</span>
        </button>

        <p class="form-note">
            Please enter the correct student details.
        </p>

    </form>

</div>
