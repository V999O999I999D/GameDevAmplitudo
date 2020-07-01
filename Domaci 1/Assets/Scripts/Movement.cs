using System.Collections;
using System.Collections.Generic;
using UnityEngine;
public class Movement : MonoBehaviour
{
    [SerializeField] private float put;
    private int jumpsRemaining = 2;
    
    void Move()
    {
        if (Input.GetKey(KeyCode.RightArrow))
        {
            transform.position = new Vector2(transform.position.x + put, transform.position.y);
        }
        if (Input.GetKey(KeyCode.LeftArrow))
        {
            transform.position = new Vector2(transform.position.x - put, transform.position.y);
        }
    }

    void Jump()
    {
        if (jumpsRemaining > 0 && Input.GetKeyDown(KeyCode.Space))
        {
            Vector2 jump = new Vector2(0, 30f);
            GetComponent<Rigidbody2D>().velocity = jump;
            jumpsRemaining--;
        }
    }

    void OnCollisionEnter2D()
    {
        jumpsRemaining = 2;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        Move();
        Jump();
    }
}
