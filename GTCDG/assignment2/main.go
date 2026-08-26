package main

import (
	"fmt"
	"log"
	"os"
)

func main() {
	arg := os.Args[1]
	file, err := os.ReadFile(arg)
	if err != nil {
		log.Fatal(err)
	}
	fmt.Println(string(file))
}
