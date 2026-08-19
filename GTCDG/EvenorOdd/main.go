package main

import (
	"fmt"
)

func main() {
	count := 100
	var s = make([]int, 0, count)
	for i := 0; i < count; i++ {
		s = append(s, i)
		if i%2 == 0 {
			fmt.Println(i, "is Even")
		} else {
			fmt.Println(i, "is odd")

		}
	}

}
