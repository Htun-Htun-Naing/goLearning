package main

import "fmt"

type contactInfo struct {
	email   string
	zipCode int
}

type person struct {
	//propertyName typeOfthePropertyName
	firstName string
	lastName  string
	contactInfo
}

func main() {
	jim := person{
		firstName: "Jim",
		lastName:  "Party",
		contactInfo: contactInfo{
			email:   "test@gmail.com",
			zipCode: 111111,
		},
	}
	// jimPointer := &jim
	// fmt.Printf("%p\n", jimPointer)
	jim.updateName("Jimmy")

	jim.print()
	name := "bill"
	fmt.Println(*&name)
}

func (pointerToPerson *person) updateName(newFirstName string) {
	(*pointerToPerson).firstName = newFirstName
}

func (p person) print() {
	fmt.Printf("%+v", p)
}
