<?php

// ExtEntry will follow segment objects (3.2.22 Object: Segment) but
// we are going to use ExtEntry instead of Segment.go because the next reasons:
//
//	- Segment have a ext field, so it will be impossible to marshal/unmarshal
//    "Passing cyclic structures to Marshal will result in an infinite recursion"
//	- To express {segment: {"name":"x_forwarded_for", "value": ""}}
//    Segment object has omitempty, so value: "" wont be shown.
class ExtEntry
{
//    Name  string `json:"name"`
//    Value string `json:"value"`
}