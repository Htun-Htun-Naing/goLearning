package booking

import (
	"time"
)

// Schedule returns a time.Time from a string containing a date.
func Schedule(date string) time.Time {
	layout := "1/2/2006 15:04:05"
	d, err := time.Parse(layout, date)
	if err != nil {
		return time.Time{}
	}
	return d
}

// HasPassed returns whether a date has passed.
func HasPassed(date string) bool {
	layout := "January 2, 2006 15:04:05"
	t, err := time.Parse(layout, date)
	if err != nil {
		return false
	}
	// as a thinking logic
	// now := time.Now()
	// return now.After(t)
	// but in one liner
	return t.Before(time.Now())
}

// IsAfternoonAppointment returns whether a time is in the afternoon.
func IsAfternoonAppointment(date string) bool {
	layout := "Monday, January 2, 2006 15:04:05"
	t, err := time.Parse(layout, date)
	if err != nil {
		return false
	}
	return t.Hour() >= 12 && t.Hour() <= 18
}

// Description returns a formatted string of the appointment time.
func Description(date string) string {
	layout := "1/2/2006 15:04:05"
	t, err := time.Parse(layout, date)
	if err != nil {
		return "error"
	}
	// NOTE: formatting for each date and time and passed it with sprintf
	// dateF := t.Format("Monday, January 2, 2006")
	// timeF := t.Format("15:04")
	// return fmt.Sprintf("You have an appointment on %s, at %s.", dateF, timeF)

	// NOTE: can also passed with magic reference date as follow
	return t.Format("You have an appointment on Monday, January 2, 2006, at 15:04.")
}

// AnniversaryDate returns a Time with this year's anniversary.
func AnniversaryDate() time.Time {
	// => 2020-09-15 00:00:00 +0000 UTC
	// layout := "2006-01-02 15:04:05 -0700 MST"
	return time.Date(time.Now().Year(), time.September, 15, 00, 00, 00, 0, time.UTC)
	// NOTE: can also use like this
	//return time.Date(time.Now().Year(), time.September, 15, 0, 0, 0, 0, time.UTC)
}
