# q1.py
from datetime import datetime

class Doctor:
    def __init__(self, name, speciality):
        self.name = name
        self.speciality = speciality

class Patient:
    def __init__(self, name, age):
        self.name = name
        self.age = age

class Appointment:
    def __init__(self):
        # date -> list of (time, doctor, patient)
        self.schedule = {}

    def schedule_appointment(self, date_str, time_str, doctor, patient):
        dt_date = datetime.strptime(date_str, "%Y-%m-%d").date()
        dt_time = datetime.strptime(time_str, "%H:%M").time()
        key = dt_date.isoformat()
        self.schedule.setdefault(key, []).append((dt_time, doctor, patient))
        print(f"✅ Appointment scheduled: {patient.name} with Dr.{doctor.name} on {key} at {dt_time}")

    def print_daily_appointments(self, date_str):
        dt_date = datetime.strptime(date_str, "%Y-%m-%d").date()
        key = dt_date.isoformat()
        print(f"\n📅 Appointments for {key}:")
        for t, doc, pat in sorted(self.schedule.get(key, []), key=lambda x: x[0]):
            print(f"{t.strftime('%H:%M')} | Dr.{doc.name} ({doc.speciality}) with {pat.name} (age {pat.age})")

# Demo
if __name__ == "__main__":
    d1 = Doctor("Amit Kumar", "Cardiology")
    d2 = Doctor("Sara Mehta", "ENT")
    p1 = Patient("Ravi", 45)
    p2 = Patient("Anita", 30)

    ap = Appointment()
    ap.schedule_appointment("2025-10-05", "10:00", d1, p1)
    ap.schedule_appointment("2025-10-05", "10:30", d2, p2)
    ap.print_daily_appointments("2025-10-05")
